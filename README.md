# wordpress-xmlrpc-shell
Replacement xmlrpc.php file to intercept WordPress XML-RPC requests.  Use this file to capture the XML-RPC request and do with it as you wish.

This file uses wordpress-xmlrpc-parser to transform the XML-RPC message into an array.  This array is passed to the callback function.  Put your execution code in the callback function.
