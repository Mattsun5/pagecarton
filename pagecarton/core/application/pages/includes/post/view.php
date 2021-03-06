<?php
/**
* PageCarton Page Generator
*
* LICENSE
*
* @category PageCarton
* @package /post/view
* @generated Ayoola_Page_Editor_Layout
* @copyright  Copyright (c) PageCarton. (http://www.PageCarton.com)
* @license    http://www.PageCarton.com/license.txt
* @version $Id: view.php	Thursday 23rd of May 2019 01:45:19 AM	ayoola@ayoo.la $ 
*/
//	Page Include Content

							if( Ayoola_Loader::loadClass( 'Ayoola_Page_Editor_Text' ) )
							{
								
$_3fa21d2b3d9c77ddfd69616a823104e6 = new Ayoola_Page_Editor_Text( array (
  'editable' => '<p><img src="{{{document_url}}}" alt="Image" style="width:100%"></p>

<div class="container">

<h1 class="pc_give_space_top_bottom">{{{article_title}}}</h1>

<p class="pc_give_space_top_bottom">{{{article_description}}}</p>

</div>
',
  'preserved_content' => '<p><img src="{{{document_url}}}" alt="Image" style="width:100%"></p>

<div class="container">

<h1 class="pc_give_space_top_bottom">{{{article_title}}}</h1>

<blockquote class=\'pc_give_space_top_bottom\'>{{{article_description}}}</blockquote>

</div>
',
  'url_prefix' => '',
  'widget_options' => 
  array (
    0 => 'preserve_content',
    1 => 'embed_widgets',
    2 => 'parameters',
  ),
  'pagewidget_id' => '',
  'widget_name' => '{{{article_title}}}

{{{article_description}}}',
  'markup_template_object_name' => 
  array (
    0 => 'Application_Article_View',
  ),
  'advanced_parameter_value' => 
  array (
    0 => '<p class=\'pc_give_space_top_bottom\'></p>',
  ),
  'content_to_clear[0]' => '<p class=\'pc_give_space_top_bottom\'></p>',
  'insert_id' => '1558575919-0-1',
) );

							}
							else
							{
								
$_3fa21d2b3d9c77ddfd69616a823104e6 = null;

							}
							
							if( Ayoola_Loader::loadClass( 'Ayoola_Object_Embed' ) )
							{
								
$_ccfcd65b00854efe614caba97537085f = new Ayoola_Object_Embed( array (
  'editable' => 'Application_Article_View',
  'pagewidget_id' => '',
  'widget_name' => 'Application_Article_View',
  'advanced_parameter_value' => 
  array (
    0 => '1',
    1 => '1',
    2 => '1',
    3 => '1',
    4 => '1',
  ),
  'get_views_count' => '1',
  'get_audio_play_count' => '1',
  'get_download_count' => '1',
  'thumbnail' => '1',
  'hide_default_post_view' => '1',
  'insert_id' => '1558575919-0-2',
) );

							}
							else
							{
								
$_ccfcd65b00854efe614caba97537085f = null;

							}
							
							if( Ayoola_Page::hasPriviledge( array (
  0 => '98',
  1 => '99',
), array( 'strict' => true ) ) )
							{
								if( Ayoola_Loader::loadClass( 'Ayoola_Page_Editor_Text' ) )
								{
									
$_000ba5e12fc767f708845d66c62fb715 = new Ayoola_Page_Editor_Text( array (
  'editable' => '<section class="xcontainer" style="padding:2em 1em 2em 1em; ">
    <p style="text-align: center;"><span style="font-size:11px;">Manage {{{post_type}}}</span></p>
    <br>
    <p style="text-align: center;">
        <a class="btn btn-default" href="/widgets/Application_Article_Editor?article_url={{{article_url}}}" target="_blank">
            <span style="font-size:11px;">Edit {{{post_type}}} Information</span>
        </a>
        <a class="btn btn-warning" href="/widgets/Application_Article_Delete?article_url={{{article_url}}}" target="_blank">
            <span style="font-size:11px;">Delete {{{post_type}}}</span>
        </a>
    </p>
    <br>
</section>',
  'preserved_content' => '<section class="xcontainer" style="padding:2em 1em 2em 1em; ">
    <p style="text-align: center;"><span style="font-size:11px;">Manage {{{post_type}}}</span></p>
    <br>
    <p style="text-align: center;">
        <a class="btn btn-default" href="/widgets/Application_Article_Editor?article_url={{{article_url}}}" target="_blank">
            <span style="font-size:11px;">Edit {{{post_type}}} Information</span>
        </a>
        <a class="btn btn-warning" href="/widgets/Application_Article_Delete?article_url={{{article_url}}}" target="_blank">
            <span style="font-size:11px;">Delete {{{post_type}}}</span>
        </a>
    </p>
    <br>
</section>',
  'url_prefix' => '',
  'pagewidget_id' => '',
  'widget_name' => 'Manage {{{post_type}}}
    
    
        
            Edit {{{post_type}}} Information
        
        
            Delete {{{post_type}}}',
  'markup_template_object_name' => 
  array (
    0 => 'Application_Article_View',
  ),
  'advanced_parameter_value' => 
  array (
    0 => 'Application_Article_View',
    1 => 'pc_give_space_top_bottom',
  ),
  'object_access_level' => 
  array (
    0 => '98',
    1 => '99',
  ),
  'wrapper_name' => 'well',
  'object_class' => 'pc_give_space_top_bottom',
  'insert_id' => '1558575919-0-3',
) );

								}
								else
								{
									
$_000ba5e12fc767f708845d66c62fb715 = null;

								}
							}    
							
							if( Ayoola_Loader::loadClass( 'Ayoola_Page_Editor_Text' ) )
							{
								
$_16296832673663f047e30a609ffd4836 = new Ayoola_Page_Editor_Text( array (
  'editable' => '<div class="container">
<p>&nbsp;</p>

<h3>Other {{{post_type}}} similar to {{{article_title}}}</h3>

<p>&nbsp;</p>
</div>
',
  'preserved_content' => '<div class="container">
<p>&nbsp;</p>

<h3>Other {{{post_type}}} similar to {{{article_title}}}</h3>

<p>&nbsp;</p>
</div>
',
  'url_prefix' => '',
  'widget_options' => 
  array (
    0 => 'embed_widgets',
    1 => 'wrappers',
    2 => 'parameters',
  ),
  'pagewidget_id' => '',
  'widget_name' => '&nbsp;

Other {{{post_type}}} similar to {{{article_title}}}

&nbsp;',
  'markup_template_object_name' => 
  array (
    0 => 'Application_Article_View',
  ),
  'advanced_parameter_value' => 
  array (
    0 => '',
  ),
  'wrapper_name' => 'dark',
  '' => '',
  'insert_id' => '1558575919-0-4',
) );

							}
							else
							{
								
$_16296832673663f047e30a609ffd4836 = null;

							}
							
							if( Ayoola_Loader::loadClass( 'Application_Article_ShowAll' ) )
							{
								
$_72d6251312d1901e8b57f2e6638cdc45 = new Application_Article_ShowAll( array (
  'option' => '6',
  'category_name' => '',
  'article_types' => '',
  'template_name' => 'ProductsforSale',
  'widget_options' => 
  array (
    0 => 'wrappers',
    1 => 'parameters',
  ),
  'pagewidget_id' => '',
  'widget_name' => '6 -  -  - ProductsforSale - Array -  -  - Array - well - 1 - container',
  'advanced_parameter_value' => 
  array (
    0 => '1',
    1 => 'container',
  ),
  'wrapper_name' => 'well',
  'post_with_same_true_post_type' => '1',
  'wrapper_inner_class' => 'container',
  'insert_id' => '1558575919-0-5',
) );

							}
							else
							{
								
$_72d6251312d1901e8b57f2e6638cdc45 = null;

							}
							