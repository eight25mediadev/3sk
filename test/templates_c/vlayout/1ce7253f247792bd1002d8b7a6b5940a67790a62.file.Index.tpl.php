<?php /* Smarty version Smarty-3.1.7, created on 2018-03-21 10:00:13
         compiled from "/home/eight25test/3sk.825mediatesting.com/includes/runtime/../../layouts/vlayout/modules/Settings/MenuEditor/Index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:5724863005ab22d2db4d123-32785839%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1ce7253f247792bd1002d8b7a6b5940a67790a62' => 
    array (
      0 => '/home/eight25test/3sk.825mediatesting.com/includes/runtime/../../layouts/vlayout/modules/Settings/MenuEditor/Index.tpl',
      1 => 1383547495,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5724863005ab22d2db4d123-32785839',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'QUALIFIED_MODULE' => 0,
    'MODULE_NAME' => 0,
    'SELECTED_MODULES' => 0,
    'SELECTED_MODULE_IDS' => 0,
    'MODULE_MODEL' => 0,
    'ALL_MODULES' => 0,
    'MODULES_LIST' => 0,
    'TABID' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5ab22d2dca705',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ab22d2dca705')) {function content_5ab22d2dca705($_smarty_tpl) {?>
<div class="container-fluid" id="menuEditorContainer"><div class="widget_header row-fluid"><div class="span8"><h3><?php echo vtranslate('LBL_MENU_EDITOR',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</h3></div></div><hr><div class="contents"><form name="menuEditor" action="index.php" method="post" class="form-horizontal" id="menuEditor"><input type="hidden" name="module" value="<?php echo $_smarty_tpl->tpl_vars['MODULE_NAME']->value;?>
" /><input type="hidden" name="action" value="Save" /><input type="hidden" name="parent" value="Settings" /><div class="row-fluid paddingTop20"><?php $_smarty_tpl->tpl_vars['SELECTED_MODULE_IDS'] = new Smarty_variable(array(), null, 0);?><select data-placeholder="<?php echo vtranslate('LBL_ADD_MENU_ITEM',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
" id="menuListSelectElement" class="select2 span12" multiple="" data-validation-engine="validate[required]" ><?php  $_smarty_tpl->tpl_vars['MODULE_MODEL'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['MODULE_MODEL']->_loop = false;
 $_smarty_tpl->tpl_vars['SELECTED_MODULE'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['SELECTED_MODULES']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['MODULE_MODEL']->key => $_smarty_tpl->tpl_vars['MODULE_MODEL']->value){
$_smarty_tpl->tpl_vars['MODULE_MODEL']->_loop = true;
 $_smarty_tpl->tpl_vars['SELECTED_MODULE']->value = $_smarty_tpl->tpl_vars['MODULE_MODEL']->key;
?><?php echo array_push($_smarty_tpl->tpl_vars['SELECTED_MODULE_IDS']->value,$_smarty_tpl->tpl_vars['MODULE_MODEL']->value->getId());?>
<?php } ?><?php  $_smarty_tpl->tpl_vars['MODULES_LIST'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['MODULES_LIST']->_loop = false;
 $_smarty_tpl->tpl_vars['PARENT_NAME'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['ALL_MODULES']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['MODULES_LIST']->key => $_smarty_tpl->tpl_vars['MODULES_LIST']->value){
$_smarty_tpl->tpl_vars['MODULES_LIST']->_loop = true;
 $_smarty_tpl->tpl_vars['PARENT_NAME']->value = $_smarty_tpl->tpl_vars['MODULES_LIST']->key;
?><optgroup label='<?php echo vtranslate("LBL_".($_smarty_tpl->tpl_vars['PARENT_NAME']->value),$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
'><?php  $_smarty_tpl->tpl_vars['MODULE_MODEL'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['MODULE_MODEL']->_loop = false;
 $_smarty_tpl->tpl_vars['MODULE_NAME'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['MODULES_LIST']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['MODULE_MODEL']->key => $_smarty_tpl->tpl_vars['MODULE_MODEL']->value){
$_smarty_tpl->tpl_vars['MODULE_MODEL']->_loop = true;
 $_smarty_tpl->tpl_vars['MODULE_NAME']->value = $_smarty_tpl->tpl_vars['MODULE_MODEL']->key;
?><?php $_smarty_tpl->tpl_vars['TABID'] = new Smarty_variable($_smarty_tpl->tpl_vars['MODULE_MODEL']->value->getId(), null, 0);?><option value="<?php echo $_smarty_tpl->tpl_vars['TABID']->value;?>
" <?php if (in_array($_smarty_tpl->tpl_vars['TABID']->value,$_smarty_tpl->tpl_vars['SELECTED_MODULE_IDS']->value)){?> selected <?php }?>><?php echo vtranslate($_smarty_tpl->tpl_vars['MODULE_NAME']->value,$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
</option><?php } ?></optgroup><?php } ?></select></div><div class="row-fluid paddingTop20"><div class=" span6"><button class="btn btn-success hide pull-right" type="submit" name="saveMenusList"><strong><?php echo vtranslate('LBL_SAVE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</strong></button></div></div><input type="hidden" name="selectedModulesList" value='' /><input type="hidden" name="topMenuIdsList" value='<?php echo ZEND_JSON::encode($_smarty_tpl->tpl_vars['SELECTED_MODULE_IDS']->value);?>
' /></form></div></div><?php }} ?>