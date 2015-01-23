/**
 * @license Copyright (c) 2003-2013, CKSource - Frederico Knabben. All rights reserved.
 * For licensing, see LICENSE.html or http://ckeditor.com/license
 */

CKEDITOR.editorConfig = function( config ) {
	
	var BASEURL = 'http://localhost/site/';
	// ----   KC finder licença open source

	

   config.filebrowserBrowseUrl = BASEURL + 'js/kcfinder/browse.php?type=files';
   config.filebrowserImageBrowseUrl = BASEURL + 'js/kcfinder/browse.php?type=images';
   config.filebrowserFlashBrowseUrl = BASEURL + 'js/kcfinder/browse.php?type=flash';
   config.filebrowserUploadUrl = BASEURL + 'js/kcfinder/upload.php?type=files';
   config.filebrowserImageUploadUrl = BASEURL + 'js/kcfinder/upload.php?type=images';
   config.filebrowserFlashUploadUrl = BASEURL + 'js/kcfinder/upload.php?type=flash';

	
	// ----   ckfinder licença paga
	//http://localhost/site/js/ckfinder/ckfinder.html
	
	
	//config.filebrowserBrowseUrl = '../js/ckfinder/ckfinder.html',
   // config.filebrowserImageBrowseUrl = '../js/ckfinder/ckfinder.html?type=Images',
  //  config.filebrowserFlashBrowseUrl = '../js/ckfinder/ckfinder.html?type=Flash',
 //   config.filebrowserUploadUrl = '../js/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files',
  //  config.filebrowserImageUploadUrl = '../js/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images',
    //config.filebrowserFlashUploadUrl = '../js/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash'

};
