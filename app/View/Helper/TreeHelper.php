<?php
class TreeHelper extends Helper {
	var $helpers = array('Form', 'Html', 'Timthumb');
    
    public $bootstrap = false;
    public $block_start = '<ul>';
    public $context_start = '<li>';
    public $context = array('<span>%s</span>' => array( 'titulo' ));
    public $context_end = '</li>';
    public $block_end = '</ul>';
    public $carret = '<span></span>';

    function show($data, $modelAlias ) {
        $return = $this->list_element($data, $modelAlias, 0);
        return $return;
    }

    function list_element($data, $modelAlias, $level, $thischild=false) {        
        $output = '';
        if (count($data)>0) {
            if ($this->bootstrap && ($level==0)) {
                $output .= $this->_outElement( $this->block_start, $modelAlias, $data[0] );
                
            } else if ($this->bootstrap && $thischild) {
                $output .= $this->_outElement( '<ul class="dropdown-menu">', $modelAlias, $data[0] );
            } else {
                $output .= $this->_outElement( '<ul>', $modelAlias, $data[0] );
            }
            
            foreach ($data as $key => $val) {
                $output .= $this->_outElement( $this->context_start, $modelAlias, $val );
                $output .= $this->_outElement( $this->context, $modelAlias, $val, isset($val['children'][0]) );
                
                if (isset($val['children'][0])) $output .= $this->list_element($val['children'], $modelAlias, $level + 1, (isset($val['children'][0])) );
                
                $output .= $this->_outElement( $this->context_end, $modelAlias, $val );
            }
            $output .= $this->_outElement( $this->block_end, $modelAlias, $data[0] );
        }
        return $output;
    }
    
    function showBootstrap($data, $modelAlias ) {
        $return = $this->list_elementBootstrap($data, $modelAlias, 0);
        return $return;
    }
    
    function list_elementBootstrap($data, $modelAlias, $level) {        
        $output = '';
        if (count($data)>0) {
            if ($level==0) {
                $output .= $this->_outElement( '<ul class="nav navbar-nav">', $modelAlias, $data[0] );                
            } else if (isset($val['children'][0])) {
                $output .= $this->_outElement( '<ul class="dropdown">', $modelAlias, $data[0] );
            } else {
                $output .= $this->_outElement( '<ul class="dropdown-menu" role="menu">', $modelAlias, $data[0] );
            }
            
            foreach ($data as $key => $val) {
                $output .= $this->_outElement( $this->context_start, $modelAlias, $val );
                
                
                $arr = array('<a href="%s" '. ((isset($val['children'][0])) ? 'class="dropdown-toggle" data-toggle="dropdown"' : ''). '>%s</a>' => array(
                            array('url' => 'id'),
                            array('text' => 'titulo')
                        )
                );                                                                
                $output .= $this->_outElement( $arr, $modelAlias, $val, isset($val['children'][0]) );
                                
                if (isset($val['children'][0])) $output .= $this->list_elementBootstrap($val['children'], $modelAlias, $level + 1);
                
                $output .= $this->_outElement( $this->context_end, $modelAlias, $val );
            }
            $output .= $this->_outElement( $this->block_end, $modelAlias, $data[0] );
        }
        return $output;
    }
    
    function _outElement($elements, $modelAlias, $obj, $children=false) {
        if (is_array($elements)) {
            $str_elementos = '';
            foreach($elements as $element => $attributes) {
        
                $arr_valores = array();                
                if (is_array($attributes)) {
                    foreach($attributes as $option) {
                        
                        $valor_retorno = '';
                        if ( is_string($option) && !empty($option) && isset($obj[$modelAlias][$option]) ) {
                            $valor_retorno = $obj[$modelAlias][$option];
                            
                        } else if (is_array($option)) {                            
                            foreach($option as $key_opt=>$value) {
                                
                                if ( is_string($value) && !empty($value) && isset($obj[$modelAlias][$value]) ) {
                                    $valor_retorno = $obj[$modelAlias][$value];
                                }                                
                                if ($key_opt==='name') {
                                    $valor_retorno = 'data[' . implode('][', $value) . ']';
                                } else {
                                    /*if ( is_string($value) && !empty($value) && isset($obj[$modelAlias][$value]) ) {
                                        $valor_retorno = $obj[$modelAlias][$value];
                                    }*/
                                    
                                    switch($key_opt) {
                                        case 'checked':
                                            $value = ((!is_array($value)) ? array($value) : $value );
                                            $valor_retorno = ((in_array($obj[$modelAlias]['id'], $value)) ? 'checked="checked"' : '');
                                            break;
                                        case 'selected':
                                            $value = ((!is_array($value)) ? array($value) : $value );
                                            $valor_retorno = ((in_array($obj[$modelAlias]['id'], $value)) ? 'selected="selected"' : '');
                                            break;
                                        case 'strtolower':
                                            $valor_retorno = mb_strtolower($valor_retorno);
                                            break;
                                        case 'code':
                                            $valor_retorno = Inflector::slug(utf8_encode(strtolower($valor_retorno)), '_');
                                            break;
                                        case 'carret':
                                            $valor_retorno = (($children)?$this->carret:'');
                                            break;
                                        case 'url':
                                            $valor_retorno = Router::url(array('controller'=>'menus', 'action'=>'ver', $valor_retorno), true);
                                            break;
                                        case 'text':
                                            if (is_array($value)) {
                                                $valor_retorno = (isset($value[1]) ? $value[1] : '' ) .  $obj[$modelAlias][$value[0]]  . (isset($value[2]) ? $value[2] : '' );
                                            }                                   
                                            break;
                                        case 'img':
                                            $img = (($valor_retorno<>'')?'/files/categoria/icone/'.$valor_retorno : '/img/_blank.png');
                                            
                                            App::import('Helper', 'Timthumb');
                                            $valor_retorno = '<img src="'. Router::url( '/' ) . $this->Timthumb->imageUrl( $img, array('width' => 30, 'zoom_crop'=> 2) ) .'" />';
                                            break;
                                    }
                                    
                                }                                
                            } //foreach $option
                        }
                        $arr_valores[] = $valor_retorno;
                        
                    } //foreach $attributes
                    
                } else $arr_valores[] = (string)$attributes;
                
                $str_elementos .= vsprintf($element, $arr_valores);
            } //foreach $elements
            
            return $str_elementos;
        } else return (string)$elements;
    }
    
}