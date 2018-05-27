<?php

///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
//
//  Amiga.org classic browser proxy project
//
//  (c) Karl Churchill 2010
//
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

require_once('../include.main.php');
require_once('../classes.markuprewriter.editor.php');

PageRequest::getInstance()
  ->addRewriter(new MessageEditorRewriter())
  ->process();
  
