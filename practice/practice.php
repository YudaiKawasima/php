<?php
// $in = [
//     [
//         'id' => 1,
//         'code' => 'S1001',
//         'name' => 'yamada',
//     ],
//     [
//         'id' => 2,
//         'code' => 'S1003',
//         'name' => '鈴木',
//     ],
//     [
//         'id' => 3,
//         'code' => 'S1002',
//         'name' => '佐藤',
//     ],
// ];
// foreach($in as $key){
//     var_dump($key['name']); 
// }
// 2
// $in = [
//     'id' => 1,
//     'code' => 'S1001',
//     'name' => '山田',
//     'pref' => 27,
// ];
// $out = array_keys($in);
// var_dump($out);
// /*
// array (size=4)
//   0 => string 'id' (length=2)
//   1 => string 'code' (length=4)
//   2 => string 'name' (length=4)
//   3 => string 'pref' (length=4)
// *
// 3
// $in = [
//     [
//         'id' => 1,
//         'code' => 'S1001',
//         'name' => '山田',
//     ],
//     [
//         'id' => 2,
//         'code' => 'S1003',
//         'name' => '鈴木',
//     ],
//     [
//         'id' => 3,
//         'code' => 'S1002',
//         'name' => '佐藤',
//     ],
// ];
// $out =array_column($in, 'name','code');

// var_dump($out);


/*
array (size=3)
  'S1001' => string '山田' (length=6)
  'S1002' => string '鈴木' (length=6)
  'S1003' => string '佐藤' (length=6)
*/
// 4
// $in1 = [
//     'S1001' => '山田',
//     'S1002' => '鈴木',
//     'S1003' => '佐藤',
// ];

// $in2 = '鈴木';

// $out = array_search($in2, $in1);

// var_dump($out);

// /*
// string 'S1002' (length=5)
// */
// 5
// $in1 = ['S1001', 'S1002', 'S1003'];

// $in2 = ['山田', '鈴木', '佐藤'];

// //////////////////////////////////
// //       SOME CODE HERE         //
// //////////////////////////////////

// var_dump($out);
// $out = array_combine($in1, $in2);
/*
array (size=3)
  'S1001' => string '山田' (length=6)
  'S1002' => string '鈴木' (length=6)
  'S1003' => string '佐藤' (length=6)
*/
6

?>