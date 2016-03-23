<?php

return [

	'cdn' => config('app.url').'/vendor/js/tinymce/tinymce.min.js',

	'params' => [
		"selector" => ".tinymce",
		"language" => 'it',
		"theme" => "modern",
		"skin" => "lightgray",
		"plugins" => [
			"advlist autolink link image lists charmap print preview hr anchor pagebreak spellchecker",
			"searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking",
			"save table contextmenu directionality emoticons template paste textcolor"
		],
		"toolbar" => ["insertfile undo redo | paste | styleselect | sizeselect fontselect fontsizeselect bold italic | alignleft aligncenter alignright alignjustify",
			"bullist numlist outdent indent | link image | print preview media fullpage | forecolor backcolor emoticons | code"],
		"paste_word_valid_elements" => "b,strong,i,em,h1,h2,p",
		"paste_retain_style_properties" => "color font-size",
		"paste_convert_word_fake_lists" => false
	]

];
