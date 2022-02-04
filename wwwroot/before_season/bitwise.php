<?php
/*
var_dump(1 | 2); // 0001 | 0010
var_dump(1 | 3);
var_dump(1 | 4);

var_dump(1 & 2);
var_dump(1 & 3);
var_dump(1 & 4);
*/

var_dump(FILE_APPEND, LOCK_EX);
var_dump(FILE_APPEND | LOCK_EX);

/*
// 追加書き込みか？
if ((引数 & FILE_APPEND) !== 0){//xxx}
*/