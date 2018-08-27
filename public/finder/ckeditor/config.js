/**
 * @license Copyright (c) 2003-2018, CKSource - Frederico Knabben. All rights reserved.
 * For licensing, see https://ckeditor.com/legal/ckeditor-oss-license
 */

CKEDITOR.editorConfig = function( config ) {
	config.filebrowserBrowseUrl = 'finder/kcfinder/browse.php?type=files';
	config.filebrowserImageBrowseUrl = 'finder/kcfinder/browse.php?type=images';
	config.filebrowserFlashBrowseUrl = 'finder/kcfinder/browse.php?type=flash';
	config.filebrowserUploadUrl = 'finder/kcfinder/upload.php?type=files';
	config.filebrowserImageUploadUrl = 'public/finder/kcfinder/upload.php?type=images';
	config.filebrowserFlashUploadUrl = 'finder/kcfinder/upload.php?type=flash';
};
