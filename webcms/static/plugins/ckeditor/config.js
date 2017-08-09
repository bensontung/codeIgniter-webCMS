/**

 * @license Copyright (c) 2003-2013, CKSource - Frederico Knabben. All rights reserved.

 * For licensing, see LICENSE.html or http://ckeditor.com/license

 */

CKEDITOR.editorConfig = function( config ) {

	// Define changes to default configuration here. For example:

	// config.language = 'fr';

	// config.uiColor = '#AADC6E';


	  //kcfinder

	  config.filebrowserBrowseUrl = '/webcms/static/plugins/kcfinder/?cms=CodeIgniter&type=files';

      config.filebrowserImageBrowseUrl = '/webcms/static/plugins/kcfinder/?cms=CodeIgniter&type=files';

      config.filebrowserFlashBrowseUrl = '/webcms/static/plugins/kcfinder/?cms=CodeIgniter&type=files';

      config.filebrowserUploadUrl = '/webcms/static/plugins/kcfinder/?cms=CodeIgniter&type=files';

      config.filebrowserImageUploadUrl = '/webcms/static/plugins/kcfinder/?cms=CodeIgniter&type=files';

      config.filebrowserFlashUploadUrl = '/webcms/static/plugins/kcfinder/?cms=CodeIgniter&type=files';

	  

	  //font

	config.font_names='avantgarde/avantgarde;宋体/宋体;黑体/黑体;仿宋/仿宋_GB2312;楷体/楷体_GB2312;隶书/隶书;幼圆/幼圆;微软雅黑/微软雅黑;'+ config.font_names;

	//
	//config.toolbar = 'Full';
 

//config.toolbar = 'MyToolbar';
 
	config.toolbar_MyToolbar =
	[
		{ name: 'document', items : [ 'NewPage','Preview' ] },
		{ name: 'clipboard', items : [ 'Cut','Copy','Paste','PasteText','PasteFromWord','-','Undo','Redo' ] },
		{ name: 'editing', items : [ 'Find','Replace','-','SelectAll','-','Scayt' ] },
		{ name: 'insert', items : [ 'Image','Flash','Table','HorizontalRule','Smiley','SpecialChar','PageBreak'
                 ,'Iframe' ] },
                '/',
		{ name: 'styles', items : [ 'Styles','Format' ] },
		{ name: 'basicstyles', items : [ 'Bold','Italic','Strike','-','RemoveFormat' ] },
		{ name: 'paragraph', items : [ 'NumberedList','BulletedList','-','Outdent','Indent','-','Blockquote' ] },
		{ name: 'links', items : [ 'Link','Unlink','Anchor' ] },
		{ name: 'tools', items : [ 'Maximize','-','About' ] }
	];


    //

};

