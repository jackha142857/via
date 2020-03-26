<?php
/**
 * Flex @package SP Page Builder
 * Template Name - Flex
 * @author Aplikko http://www.aplikko.com
 * @copyright Copyright (c) 2016 Aplikko
 * @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 or later
*/
// no direct access
defined ('_JEXEC') or die ('restricted access');

	$peicon_list = array(
		'pe-7s-album'=>'album',	
		'pe-7s-arc'=>'arc',
		'pe-7s-back-2'=>'back-2',
		'pe-7s-bandaid'=>'bandaid',
		'pe-7s-car'=>'car',
		'pe-7s-diamond'=>'diamond',
		'pe-7s-door-lock'=>'door-lock',
		'pe-7s-eyedropper'=>'eyedropper',
		'pe-7s-female'=>'female',
		'pe-7s-gym'=>'gym',
		'pe-7s-hammer'=>'hammer',
		'pe-7s-headphones'=>'headphones',
		'pe-7s-helm'=>'helm',
		'pe-7s-hourglass'=>'hourglass',
		'pe-7s-leaf'=>'leaf',
		'pe-7s-magic-wand'=>'magic-wand',
		'pe-7s-male'=>'male',
		'pe-7s-map-2'=>'map-2',
		'pe-7s-next-2'=>'next-2',
		'pe-7s-paint-bucket'=>'paint-bucket',
		'pe-7s-pendrive'=>'pendrive',
		'pe-7s-photo'=>'photo',
		'pe-7s-piggy'=>'piggy',
		'pe-7s-plugin'=>'plugin',
		'pe-7s-refresh-2'=>'refresh-2',
		'pe-7s-rocket'=>'rocket',
		'pe-7s-settings'=>'settings',
		'pe-7s-shield'=>'shield',
		'pe-7s-smile'=>'smile',
		'pe-7s-usb'=>'usb',
		'pe-7s-vector'=>'vector',
		'pe-7s-wine'=>'wine',
		'pe-7s-cloud-upload'=>'cloud-upload',
		'pe-7s-cloud-download'=>'cloud-download',
		'pe-7s-cash'=>'cach',
		'pe-7s-close'=>'close',
		'pe-7s-bluetooth'=>'bluetooth',
		'pe-7s-way'=>'way',
		'pe-7s-close-circle'=>'close-circle',
		'pe-7s-id'=>'id',
		'pe-7s-wristwatch'=>'wristwatch',	
		'pe-7s-world'=>'world',
		'pe-7s-angle-left'=>'angle-left',
		'pe-7s-angle-right'=>'angle-right',
		'pe-7s-angle-left-circle'=>'angle-left-circle',
		'pe-7s-angle-right-circle'=>'angle-right-circle',
		'pe-7s-angle-up'=>'angle-up',
		'pe-7s-angle-down'=>'angle-down',
		'pe-7s-angle-up-circle'=>'angle-up-circle',
		'pe-7s-angle-down-circle'=>'angle-down-circle',
		'pe-7s-left-arrow'=>'left-arrow',
		'pe-7s-right-arrow'=>'right-arrow',
		'pe-7s-up-arrow'=>'up-arrow',
		'pe-7s-user'=>'user',
		'pe-7s-user-female'=>'user-female',
		'pe-7s-users'=>'users',
		'pe-7s-add-user'=>'add-user',
		'pe-7s-delete-user'=>'delete-user',
		'pe-7s-switch'=>'switch',
		'pe-7s-scissors'=>'scissors',
		'pe-7s-wallet'=>'wallet',
		'pe-7s-safe'=>'safe',
		'pe-7s-volume'=>'volume',
		'pe-7s-volume2'=>'volume2',
		'pe-7s-volume1'=>'volume1',
		'pe-7s-voicemail'=>'voicemail',
		'pe-7s-video'=>'video',
		'pe-7s-download'=>'download',
		'pe-7s-upload'=>'upload',
		'pe-7s-unlock'=>'unlock',
		'pe-7s-umbrella'=>'umbrella',
		'pe-7s-trash'=>'trash',
		'pe-7s-tools'=>'tools',
		'pe-7s-timer'=>'timer',
		'pe-7s-ticket'=>'ticket',
		'pe-7s-target'=>'target',
		'pe-7s-sun'=>'sun',
		'pe-7s-study'=>'study',
		'pe-7s-stopwatch'=>'stopwatch',
		'pe-7s-star'=>'star',
		'pe-7s-speaker'=>'speaker',
		'pe-7s-signal'=>'signal',
		'pe-7s-shuffle'=>'shuffle',
		'pe-7s-shopbag'=>'shopbag',
		'pe-7s-share'=>'share',
		'pe-7s-server'=>'server',
		'pe-7s-search'=>'search',
		'pe-7s-film'=>'film',
		'pe-7s-science'=>'science',
		'pe-7s-disk'=>'disk',
		'pe-7s-ribbon'=>'ribbon',
		'pe-7s-repeat'=>'repeat',
		'pe-7s-refresh'=>'refresh',
		'pe-7s-refresh-cloud'=>'refresh-cloud',
		'pe-7s-paperclip'=>'paperclip',
		'pe-7s-radio'=>'radio',
		'pe-7s-note2'=>'note2',
		'pe-7s-print'=>'print',
		'pe-7s-network'=>'network',
		'pe-7s-prev'=>'prev',
		'pe-7s-mute'=>'mute',
		'pe-7s-power'=>'power',
		'pe-7s-medal'=>'medal',
		'pe-7s-portfolio'=>'portfolio',
		'pe-7s-like2'=>'like2',
		'pe-7s-plus'=>'plus',
		'pe-7s-play'=>'play',
		'pe-7s-key'=>'key',
		'pe-7s-plane'=>'plane',
		'pe-7s-joy'=>'joy',
		'pe-7s-photo-gallery'=>'photo-gallery',
		'pe-7s-pin'=>'pin',
		'pe-7s-phone'=>'phone',
		'pe-7s-plug'=>'plug',
		'pe-7s-pen'=>'pen',
		'pe-7s-paper-plane'=>'paper-plane',		
		'pe-7s-paint'=>'paint',
		'pe-7s-bottom-arrow'=>'bottom-arrow',
		'pe-7s-notebook'=>'notebook',
		'pe-7s-note'=>'note',
		'pe-7s-next'=>'next',
		'pe-7s-news-paper'=>'news-paper',
		'pe-7s-musiclist'=>'musiclist',
		'pe-7s-music'=>'music',
		'pe-7s-mouse'=>'mouse',
		'pe-7s-more'=>'more',
		'pe-7s-moon'=>'moon',
		'pe-7s-monitor'=>'monitor',
		'pe-7s-micro'=>'micro',
		'pe-7s-menu'=>'menu',
		'pe-7s-map'=>'map',
		'pe-7s-map-marker'=>'map-marker',
		'pe-7s-mail'=>'mail',
		'pe-7s-mail-open'=>'mail-open',
		'pe-7s-mail-open-file'=>'mail-open-file',
		'pe-7s-magnet'=>'magnet',
		'pe-7s-loop'=>'loop',
		'pe-7s-look'=>'look',
		'pe-7s-lock'=>'lock',
		'pe-7s-lintern'=>'lintern',
		'pe-7s-link'=>'link',
		'pe-7s-like'=>'like',
		'pe-7s-light'=>'light',
		'pe-7s-less'=>'less',
		'pe-7s-keypad'=>'keypad',
		'pe-7s-junk'=>'junk',
		'pe-7s-info'=>'info',
		'pe-7s-home'=>'home',
		'pe-7s-help2'=>'help2',
		'pe-7s-help1'=>'help1',
		'pe-7s-graph3'=>'graph3',
		'pe-7s-graph2'=>'graph2',
		'pe-7s-graph1'=>'graph1',
		'pe-7s-graph'=>'graph',
		'pe-7s-global'=>'global',
		'pe-7s-gleam'=>'gleam',
		'pe-7s-glasses'=>'glasses',
		'pe-7s-gift'=>'gift',
		'pe-7s-folder'=>'folder',
		'pe-7s-flag'=>'flag',
		'pe-7s-filter'=>'filter',
		'pe-7s-file'=>'file',
		'pe-7s-expand1'=>'expand1',
		'pe-7s-exapnd2'=>'exapnd2',
		'pe-7s-edit'=>'edit',
		'pe-7s-drop'=>'drop',
		'pe-7s-drawer'=>'drawer',	
		'pe-7s-display2'=>'display2',
		'pe-7s-display1'=>'display1',
		'pe-7s-diskette'=>'diskette',
		'pe-7s-date'=>'date',
		'pe-7s-cup'=>'cup',
		'pe-7s-culture'=>'culture',
		'pe-7s-crop'=>'crop',
		'pe-7s-credit'=>'credit',
		'pe-7s-copy-file'=>'copy-file',
		'pe-7s-config'=>'config',
		'pe-7s-compass'=>'compass',
		'pe-7s-comment'=>'comment',
		'pe-7s-coffee'=>'coffee',
		'pe-7s-cloud'=>'cloud',
		'pe-7s-clock'=>'clock',
		'pe-7s-check'=>'check',
		'pe-7s-chat'=>'chat',
		'pe-7s-cart'=>'cart',
		'pe-7s-camera'=>'camera',
		'pe-7s-call'=>'call',
		'pe-7s-calculator'=>'calculator',
		'pe-7s-browser'=>'browser',
		'pe-7s-box2'=>'box2',
		'pe-7s-box1'=>'box1',
		'pe-7s-bookmarks'=>'bookmarks',
		'pe-7s-bicycle'=>'bicycle',
		'pe-7s-bell'=>'bell',
		'pe-7s-battery'=>'battery',
		'pe-7s-ball'=>'ball',
		'pe-7s-back'=>'back',
		'pe-7s-attention'=>'attention',
		'pe-7s-anchor'=>'anchor',
		'pe-7s-albums'=>'albums',
		'pe-7s-alarm'=>'alarm',
		'pe-7s-airplay'=>'airplay'
	);