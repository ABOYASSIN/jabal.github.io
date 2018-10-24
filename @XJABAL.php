<?php



ob_start();

$API_KEY = '663216790:AAF9-6b46eMJteEbuW0zoy9Ltus46eTyOac';
define('API_KEY',$API_KEY);
function bot($method,$datas=[]){
    $url = "https://api.telegram.org/bot".API_KEY."/".$method;
    $ch = curl_init();
    curl_setopt($ch,CURLOPT_URL,$url);
    curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
    curl_setopt($ch,CURLOPT_POSTFIELDS,$datas);
    $res = curl_exec($ch);
    if(curl_error($ch)){
        var_dump(curl_error($ch));
    }else{
        return json_decode($res);
    }
}
$update = json_decode(file_get_contents('php://input'));
$message = $update->message;
$text = $message->text;
$chat_id = $message->chat->id;
$u = explode("\n",file_get_contents("memb.txt"));
$c = count($u)-1;
$modxe = file_get_contents("usr.txt");
$admin = 679104423;
$name = $update->message->from->first_name;
$username = $update->message->from->username;
$date = "https://api.rangatiratan.ga/tiq.php";
$g = file_get_contents($date);
$js = json_decode($g);
$da = $js->Date;
$time = $js->Time;
$bot = bot('getme',['bot'])->result->username;
echo "<br><a  href='https://t.me/$bot'>@$bot</a>";

// DEV_the_stun // 


$omarreal = array(
 'باي'  =>  'بايات',
 'قنوات'  =>  'شترك @klamal3sha8',
'قناتي' => 'شترك @klamal3sha8',
'احبك' => 'واني هم حبي',
'لا' => 'لا اي',
'صعدني ادمن' => 'مانصعد فروخ',
'ممكن خاص' => 'لعد زاحف دي',
'وردة' => 'امعلمتي وتاج راسي 😌☺️😋',
'كواد' => 'انت بنكواد',
'طيط' => 'عراسك',
'كذاب' => 'انت كذاب',
'ولله' => 'لتحلف انت جذاب',
'كسختك' => 'دي',
'دي' => 'دي تنكال لبوك',
'نيسو' => 'معلمي ☺️😌',
'سلام' => 'الله وياك',
'مين' => 'انت مين',
'شسمك' => 'ابو جاسم 😹',
'وين' => 'بلمريخ',
'وينك' => 'هون 😓',
'انا' => 'انت لاتدخل 😂',
'الجنرال' => 'ههه فديته جٰۧنٰۛرَّٱلُْ ««🍟🌿 ',
'كيفك' => 'تمام وانته',
'مرحبا' => 'مراحب',
'بوت' => 'تفضل حبقلبي 🙂😌',
'السلام عليكم' => 'وعليكم السلام',
'كيف حالك' => 'بخير',
'اموت بيك' => 'برب جذاب ههههه',
'جكساره' => 'طكو بعد شتردون جكساره وكذا',
'جكسارة' => 'طكو بعد شتردون جكساره وكذا',
'تكسي' => 'ماعدنه تكسي روح مشي',
'سياره' => 'ماعدنه مشي ولي هع',
'سيارة' => 'ماعدنه مشي ولي هع',
'هلو' => ' [هٍُلٍــــ👋ـٍٍُوات ̯ﻋﻣٰཻ̯ﮧٰـّريٰٰ 🖤ֆ” ]',
'السلام عليكم' => '[وعليكم السلام]',
'كيف حالك' => '[بخير]',
'هلا' => '[هــلآۄات ⁽💗₎ۦ❥]',
'شلونج' => '[اۢنٰـۛتهہ شعليك بيهة]',
'اشلونك' => '[مــﮫـمـ❥ـوﯢمـ۾"☹️]',
'محح' => ' [• ﺄموﯟعنَ ،😞💓.]',
'مححه' => ' [ﻋِﻋٰافيٰۛـۢھٰهۃ ؛💜ֆ ]',
'انور' => '[ ﺎخٰٰ̲خྀـٓربٰ ﯛ୭ات̲كھٰربْ ♥️]',
'😞' => '[ شۢبۢيٰـۛچٰہ/ك ،😪❀ ]',
'حترك' => ' [• ﺂبوككَ "̯😾👊 ]',
'ضوجه' => ' [كٰ̲ۛكۛلٰشۢ ،🍿ֆۦ ]',
'صباحوو' => '[ صۢبٰاζـۢوٰﯟ ،☀️ عسل]',
'صباحو' => '[ صۢبٰاζـۢوٰﯟ ،☀️ عسل]',
'صباح الخير' => '[ صۢبٰاζ النور ]',
'شبيك' => '[ مٰۛكٰسْوٰ୭ر💔‏ֆ، ]',
'جنرال' => '[ عٰ̲ہـيٰྀہٰٰٖونه┆💙🙋🏻‍]',
'احبك' => '[ • اعـۢ͜شـق̲ـﮧڪ/ج 😻🙊💛ֆ]',
'😐' => '[الصفنه مو الك لابو صابر🌚😹☄️]',
'🌝' => '[ • نـۢ͜ورت̲ـﮧ😻ֆ]',
'🌚' => '[منور صخام الجدر 🌝😹]',
'😹' => '[دوم الٰ̲ہـضٰྀہٰٰٖحڪه😻🙊]',
'😹😹' => '[دوم الٰ̲ہـضٰྀہٰٰٖحڪه😻🙊]', 
'😹😹😹' => '[ دوم الٰ̲ہـضٰྀہٰٰٖحڪه😻🙊]',
'😹😹😹😹' => '[ دوم الٰ̲ہـضٰྀہٰٰٖحڪه😻🙊]', 
'😹😹😹💔' => ' [دوم الٰ̲ہـضٰྀہٰٰٖحڪه😻🙊]', 
'😹😹😹😹😹😹 ' => ' [دوم الٰ̲ہـضٰྀہٰٰٖحڪه😻🙊]',
'😂😂' => '[ضحكنه وياك]',
'😂😂😂' => '[يضحك الفطير 😹😹]',
'ههه' => '[ضحكه مال نفسيه ☹️💦]',
'هههه' => '[شبيك تضحك☹️♥️]', 
'ههههه' => '[ئووف شهالضحكه😻]',
'خاصج' => ' [اهوو هم زحف] ',
'انجب' => ' [• ﭑنتَ نجب،😾👊.]',
'ممكن خاص' => ' [• ﭑطرردَ ،😹💔.]',
'شلونكم' => ' [تٰ̲مۢم̲ۢآمٰہۢ 🌸ֆ و انَـَY̷ ̜̐O̷ ̜̐U̷ ̜̐ـَتَ/ي]',
'شكو ماكو' => ' [✘مْْـْـِْMâkøـ﴿🌚﴾ـٌّـٌاْٰكو شـي💔]',
'🌝' => ' [نــــ🌝ـــورت/ي ̯ﻋﻣٰཻ̯ﮧٰـّريٰٰ 🖤ֆ]” ',
'وانت شعليك' => ' [بـــيہۢۦ😹⇣]',
'تبادل' => '[﴿لـاۥ﴾❌ֆ ̮!❥]',
'شونك' => ' [تمـٍٍُام ̯وانتٰ/يٰٰ 🖤ֆ” ]',
'هلاو' => ' [هٍُلٍاوات ̯ﻋﻣٰཻ̯ﮧٰـّريٰٰ 🖤ֆ]”',
);

// DEV_the_stun // 

foreach ( $omarreal as $real => $words ) {
if($text == $real){
bot('sendMEssage',[
'chat_id'=>$chat_id,
'text'=>$words,
'reply_to_message_id'=>$message->message_id
]);
}
}

if($new){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>$rrand[$rrnew],
'reply_to_message_id'=>$message->message_id, 
]);
}

if($left){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>$rrrand[$rrleft],
'reply_to_message_id'=>$message->message_id, 
]);
} 
$update = json_decode(file_get_contents('php://input'));
$message = $update->message;
$text = $message->text;
$chat_id = $message->chat->id;
$name = $message->from->first_name;
$admins = "679104423";
$data = $update->callback_query->data;
$u = explode("\n",file_get_contents("memb.txt"));
$c = count($u)-1;
$modxe = file_get_contents("usr.txt");
$admin = "679104423"; /* ايدي مالتك */

$from_id = $message->from->id;
$ch = "@klamal3sha8";
$join = file_get_contents("https://api.telegram.org/bot".API_KEY."/getChatMember?chat_id=$ch&user_id=".$from_id);
if($message && (strpos($join,'"status":"left"') or strpos($join,'"Bad Request: USER_ID_INVALID"') or strpos($join,'"status":"kicked"'))!== false){
bot('sendMessage', [
'chat_id'=>$chat_id,
'text'=>"▫️ يجب عليك الاشتراك في قناة البوت اولا ⚜️؛
◼️ اشترك في القناة ثم ارسل /start ،
 - قناة البوت @klamal3sha8 •",
]);
bot("sendmessage",[
    "chat_id"=>$sudo,
    "text"=>"- العضو قام بألاشتراك في قناة البوت ، 📌
- معلومات العضو الذي قام بألاشتراك ؛

• الاسم ؛ $name 
• الايدي ؛ $from_id
• المعرف ؛ @$username
﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎ ",

    ]);return false;}
if ($update && !in_array($chat_id, $u)) {
    file_put_contents("memb.txt", $chat_id."\n",FILE_APPEND);
  }
if ($text == "/admin" and $chat_id == $admin ) {
    bot('sendMessage',[
        'chat_id'=>$chat_id,
      'text'=>"
☑️￤اهلا عزيزي :- `المطور` .
▫️￤اليك الاوامر الان حدد ماتريده 📩
-
",
'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>true,
        'reply_markup'=>json_encode([
            'inline_keyboard'=>[
[['text'=>'رسالة للكل ','callback_data'=>'ce']],
[['text'=>'عدد الاعضاء ','callback_data'=>'co']],
            ]
            ])
        ]);
}
if($data == 'off'){
bot('editMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
      'text'=>"
☑️￤اهلا عزيزي :- `المطور` .
▫️￤اليك الاوامر الان حدد ماتريده 📩
-
",
'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>true,
        'reply_markup'=>json_encode([
            'inline_keyboard'=>[
[['text'=>'رسالة للكل ','callback_data'=>'ce']],
[['text'=>'عدد الاعضاء ','callback_data'=>'co']],
            ]
            ])
]);
file_put_contents('usr.txt', '');
}
#                   المشتركين                   #
if($data == "co" and $update->callback_query->message->chat->id == $admin ){ 
    bot('answercallbackquery',[
        'callback_query_id'=>$update->callback_query->id,
        'text'=>"
        عدد مشتركين البوت📢 :- [ $c ] .
        ",
        'show_alert'=>true,
]);
}
#                   رسالة للكل                   #
if($data == "ce" and $update->callback_query->message->chat->id == $admin){ 
    file_put_contents("usr.txt","yas");
    bot('EditMessageText',[
    'chat_id'=>$update->callback_query->message->chat->id,
    'message_id'=>$update->callback_query->message->message_id,
    'text'=>"▪️ ارسل رسالتك الان 📩 وسيتم نشرها لـ [ $c ] مشترك . 
   ",
    'reply_markup'=>json_encode([
        'inline_keyboard'=>[
[['text'=>' الغاء 🚫 •','callback_data'=>'off']]    
        ]
    ])
    ]);
}
if($text and $modxe == "yas" and $chat_id == $admin ){
    for ($i=0; $i < count($u); $i++) { 
        bot('sendMessage',[
          'chat_id'=>$u[$i],
          'text'=>"$text",
'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>true,

]);
    file_put_contents("usr.txt","no");

} 
}$mem = file_get_contents("https://api.telegram.org/bot$API_KEY/getChatMembersCount?chat_id=$chat_id");
    $json = json_decode($mem);
    $result = $json->result;
$ttt = file_get_contents("shart.txt");
$sudo = 679104423;
$from_id = $message->from->id;
if($from_id == $sudo)
if(preg_match('/^(ضع شرط التفعيل) (.*)/s', $text, $text3)){
file_put_contents("shart.txt",$text3[2]);
bot('sendmessage',[
    'chat_id'=>$chat_id,
    'text'=>"📑| أهلاً عزيزي , تم وضع { <code>$text3[2]</code> } كـ شرط التفعيل .",
    'reply_to_message_id'=>$message->message_id,
    'parse_mode'=>"HTML",
    ]);
}
if($from_id !== $sudo)
if(preg_match('/^(ضع شرط التفعيل) (.*)/s', $text, $text3)){
    bot('sendmessage',[
        'chat_id'=>$chat_id,
        'text'=>"أنت لست المطور 🚶🏽",
        'reply_to_message_id'=>$message->message_id,
        ]);
}
if($text == "تفعيل" and $result > $ttt ){
    bot('sendmessage',[
        'chat_id'=>$chat_id,
        'text'=>"⚙️┇ تم تفعيل البوت في المجموعة 🚸",
        'reply_to_message_id'=>$message->message_id,
        ]);
}
if($text == "تفعيل" and $result < $ttt  ){
    bot('sendmessage',[
        'chat_id'=>$chat_id,
        'text'=>"🚸| لا يمكنك تفعيل البوت في المجموعة يجب أن تكون المجموعة أكثر من { <code>$ttt</code> } عضو 👤",
        'reply_to_message_id'=>$message->message_id,
        'parse_mode'=>"HTML",
        ]);
}
if($text == "شرط التفعيل"){
    bot('sendmessage',[
        'chat_id'=>$chat_id,
        'text'=>"♨️ الحد الأدنى لتفعيل البوت في المجموعات » <code>$ttt</code>
✓",
'reply_to_message_id'=>$message->message_id,
'parse_mode'=>"HTML",
]);
}
if($text == "/start"){
bot('sendMessage',[
        'chat_id'=>$chat_id,
      'text'=>"• اهلا بك ؛ [$name](tg://user?id=$chat_id) 

- في بوت الردود المميز الجديد ،
-فقط قم بضافة البوت ادمن وتمتع ردود ،
- البوت مختص بتفاعل في مجموعتك ، 
﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎
[• اضغط هنا وتابع جديدنا ، 📢](https://t.me/klamal3sha8)",
      'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>true,
'reply_markup'=>json_encode([
        'inline_keyboard'=>[
[['text'=>"قنات البوت اشترك فضلا'",'url'=>"https://t.me/klamal3sha8"]]    
        ]
    ])
    ]);
      bot('sendMessage',[
'chat_id'=>$admin,
'text'=>"- تم دخول شخص الى البوت الخاص بك 🔰؛
• معلومات العضو ، 👋🏻

• الاسم ؛ $name ،
• المعرف ؛ @$username ،
• الايدي ؛ $from_id ،
﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎
• الوقت ؛ $time ، 
• التاريخ ؛ $da ،",
]); 
if ($update && !in_array($chat_id, $u)) {
    file_put_contents("memb.txt", $chat_id."\n",FILE_APPEND);
  }
}
if($text == "الوقت"){
bot('sendMessage',[
        'chat_id'=>$chat_id,
      'text'=>" [$name](tg://user?id=$chat_id) 

• الايدي ؛ $from_id ،
√ !عزيزي الوقت في الاسفل ?°•
﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎
• الساعه ؛ $time ، 
• التاريخ ؛ $da ،
¢>بتوقيت دمشق ®•
﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎
[• اضغط هنا وتابع جديدنا ، 📢](https://t.me/klamal3sha8)",
      'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>true,
'reply_markup'=>json_encode([
        'inline_keyboard'=>[
[['text'=>"قناتنه للبرمجة'",'url'=>"https://t.me/klamal3sha8"]]    
        ]
    ])
    ]);
 



}$rep = $message->reply_to_message;
$namesaeed = $update->message->from->first_name;
$usersaeed = $update->message->from->username;
$idsaeed =  $update->message->from->id;
{
}$SAEEDFiles = 679104423; //ايديك
$SA3ED = explode("\n",file_get_contents("SAEED.txt"));
$SAEED = count($SA3ED)-1;
$T4TTTT = file_get_contents("T4TTTT.txt");
if ($update && !in_array($chat_id, $SA3ED)) {
    file_put_contents("SAEED.txt", $chat_id."\n",FILE_APPEND);
  }
if($text == "المشتركين" and $chat_id == $SAEEDFiles){
  bot('sendMessage',[
    'chat_id'=>$chat_id,
    'text'=>"❖￤عدد مشتركين بوتك سيدي المطور هو { $SAEED } مشترك ؛ 👥"
    ]);
}
if($text == "نشر" and $chat_id == $SAEEDFiles){
 file_put_contents("T4TTTT.txt", "SAEED");
  bot('sendMessage',[
    'chat_id'=>$chat_id,
    'text'=>"❖￤ارسل رسالتك الان سيدي المطور وسيتم ارسالها الى { $SAEED } مشترك ؛ 📬"
    ]);
}
if($text != "نشر" and $T4TTTT == "SAEED" and $chat_id == $SAEEDFiles){
  for ($i=0; $i < count($SA3ED); $i++) { 
    bot('sendMessage',[
      'chat_id'=>$SA3ED[$i],
      'text'=>$text,
    ]);
  }
  unlink("T4TTTT.txt");
}$sudo = "679104423"; 
$from_id    = $message->from->id;
$new_chat_member = $update->message->new_chat_member;
if($from_id == $sudo and $message->chat->type == "supergroup" )
if(preg_match('/^(ضع ترحيب) (.*)/s', $text, $text9  )){
    file_put_contents("welcome$chat_id.txt",$text9[2]);
    bot('sendmessage',[
        'chat_id'=>$chat_id,
        'text'=>"تم وضع الترحيب . ✅",
        'reply_to_message_id'=>$message->message_id,
        ]);
}
$welcome1 = file_get_contents("welcome$chat_id.txt");
if($new_chat_member){
    bot('sendmessage',[
        'chat_id'=>$chat_id,
        'text'=>$welcome1,
        'reply_to_message_id'=>$message->message_id,
]);
}
if($text == "تعطيل الترحيب" and $from_id == $sudo and $message->chat->type == "supergroup"){
    file_put_contents("welcome$chat_id.txt","");
    bot('sendmessage',[
        'chat_id'=>$chat_id,
        'text'=>"تم تعطيل ومسح الترحيب في المجموعه . ✅",
        'reply_to_message_id'=>$message->message_id,
        ]);
}$sudo = "679104423";
if($from_id == $sudo)
if(preg_match('/^(ضع اسم) (.*)/s', $text, $t1  )){
    bot('SetChatTitle',[
        'chat_id'=>$chat_id,
        'title'=>$t1[2],
        ]);
bot('sendmessage',[
  'chat_id'=>$chat_id,
  'text'=>"📭¦ تم تغير اسم المجموعه  ✋🏿
🗯¦ الان اسمه $t1[2]
✓",
'reply_to_message_id'=>$message->message_id,

  ]);
}if($text == "صورتي"){
$username = $message->from->username;
$photo = "http://telegram.me/$username";
bot('SendPhoto',[
'chat_id'=>$chat_id,
'photo'=>$photo,
'caption'=>"",
]);
}#تم
#تم

{
 }$sudo = 679104423; 
$rdod = json_decode(file_get_contents("rep.json"),true);
if(preg_match('/^(اضف رد)(.*)/',$text)){
 $text = str_replace('اضف رد','',$text);
 $text = explode("\n",$text);
 bot('sendMessage',[
    'chat_id'=>$chat_id,
    'text'=>"📣⇨تم اضافــة رد  بنجاح"
 ]);
$rdod[$text[0]] = $text[1]; file_put_contents('rep.json',json_encode($rdod));
}
foreach($rdod as $key => $val){
 if($text == $key){
   bot('sendMessage',[
    'chat_id'=>$chat_id,
    'text'=>"$rdod[$key]",
'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>true,
'reply_to_message_id'=>$mid
 ]);
 }
}$mid = $message->message_id;
$memb = $update->message->message_id;
$id = $message->from->id;
$us = $update->message->from->username;
if($text == "ايدي" and  $you == "creator"){
$get_progile = file_get_contents("https://api.telegram.org/bot$API_KEY/getUserProfilePhotos?user_id=$id&limit=1");
$json = json_decode($get_progile);
$user_photo = $json->result->photos[0][0]->file_id;
bot('sendPhoto',[
'chat_id'=>$chat_id,
'photo'=>$user_photo,
'caption'=>"
🔸 • ايديك : $id
🔸 • معرفك : @$us
🔸 • موقعك ← منشئ ثكيل 🙊💥
🔸 • رسائل المجموعه ← $memb ",
'reply_to_message_id'=>$mid,
]);
}
if($text == "ايدي" and  $you == "administrator"){
$get_progile = file_get_contents("https://api.telegram.org/bot$API_KEY/getUserProfilePhotos?user_id=$id&limit=1");
$json = json_decode($get_progile);
$user_photo = $json->result->photos[0][0]->file_id;
bot('sendPhoto',[
'chat_id'=>$chat_id,
'photo'=>$user_photo,
'caption'=>"
🔸 • ايديك : $id
🔸 • معرفك : @$us
🔸 • موقعك ← ادمن طاش 😀🍂
🔸 • رسائل المجموعه ← $memb ",
'reply_to_message_id'=>$mid,
]);
}
if($text == "ايدي" and  $you == "member"){
$get_progile = file_get_contents("https://api.telegram.org/bot$API_KEY/getUserProfilePhotos?user_id=$id&limit=1");
$json = json_decode($get_progile);
$user_photo = $json->result->photos[0][0]->file_id;
bot('sendPhoto',[
'chat_id'=>$chat_id,
'photo'=>$user_photo,
'caption'=>"
🔸 • ايديك : $id
🔸 • معرفك : @$us
🔸 • موقعك ← عضو مهتلف 😹❕
🔸 • رسائل المجموعه ← $memb ",
'reply_to_message_id'=>$mid,
]);
}$me = $message->reply_to_message; 
$mem = $me->message_id;
$MEMO = explode('كله',$text);
if($MEMO){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>$MEMO[1],
'reply_to_message_id'=>$mem,
]);
}bot('deletemessage',[
'chat_id'=>$chat_id,
'message_id'=>$i
]);
{
bot('deletemessage',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>'تم حذف' . $del[1] . 'من الرسائل'
]);
}
if($del[0] == '/del' and isset($del[1]) and $del[1] > 90){
bot('sendmessage',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>'ممنوع حذف 100 رساله فما فوق'
]);
}$reply = $update->message->reply_to_message;
$re_id      = $update->message->reply_to_message->from->id;
$API_KEY = API_KEY;
$get = file_get_contents("https://api.telegram.org/bot$API_KEY/getChatMember?chat_id=$chat_id&user_id=".$re_id);
$info = json_decode($get, true);
$re_rou = $info['result']['status'];

if($reply and $text == "كشف ادمن"){
if($re_rou == "administrator")
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"ادمن في المجموعة ⭐️",
'reply_to_message_id'=>$message->message_id,
]);
}
if($reply and $text == "كشف ادمن"){
if($re_rou == "member")
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"ليس ادمن في المجموعه ⁉️🌚",
'reply_to_message_id'=>$message->message_id,
]);
}
#-------المتغيرات-----#
$idbot = "663216790" ;
$idbotid = bot('getme',['$idbot'])->result->id;
$groups  = explode("\n",file_get_contents("groups.txt")); 

#------- خزن المجموعات ------# 

if($message->new_chat_member and $message->new_chat_member->id == $idbotid) {

if(!in_array($chat_id,$groups)) {

file_put_contents("groups.txt", "$chat_id\n", FILE_APPEND);

}
}

#-------شرط العدد -----#
if($text == "المجموعات"){
$c = count($groups);
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"🔗┇عدد المجموعات ~⪼  {$c} "
]); 
}
$ch = "@klamal3sha8"; // معرف القناة
$owner = 679104423; // ايديك 
$users = explode("\n",file_get_contents('users'));
if($update){
    
    $from_id = $update->message->from->id;
    if(!in_array($chat_id,$users)){
        file_put_contents('users',$from_id."\n",FILE_APPEND);
    }
    $in_chat = bot('getChatMember',['chat_id'=>$ch,'user_id'=>$from_id])->result->status;
    if($in_chat == 'left' or $in_chat == 'banned'){
        bot('sendMessage',[
            'chat_id'=>$chat_id,
            'text'=>'البوت لن يعمل الا بعد الاشتراك في القناة . '.$ch
        ]);
        exit();
    }
    if($from_id == $owner){
        if($text == '/users'){
            bot('sendMessage',[
                'chat_id'=>$chat_id,
                'text'=>'عدد مشتركين البوت هو : '. count($users)
            ]);
        }
        if(preg_match('/\/bc (.*)/',$text)){
            $text = str_replace('/bc ','',$text);
            foreach($users as $user){
                $res = bot('sendMessage',[
                    'chat_id'=>$chat_id,
                    'text'=>$text
                ]);
                if($res->ok == true){
                    $id = $res->result->from->id;
                    file_put_contents('tusers',$id."\n",FILE_APPEND);
                } else {
                    file_put_contents('fusers',$user."\n",FILE_APPEND);
                    continue;
                }
                bot('sendMessage',[
                    'chat_id'=>$chat_id,
                    'text'=>'تم الارسال الى : '.count(explode("\n",file_get_contents('tusers')))."\n لم يتم الارسال الى : ".count(explode("\n",file_get_contents('fusers')))
                ]);
                file_put_contents('users',file_get_contents('tusers'));
                unlink('fusers');
                unlink('tusers');
            }

        }
    }
}$bans = json_decode(file_get_contents('bans.json'),true);
$sudo = 679104423;
if (preg_match('/(حظر عام)(.*)/', $text) and $from_id == $sudo) {
  $text = str_replace('حظر عام', '', $text);
  $bans[] = trim($text,'@');
  file_put_contents('bans.json', $text);
  bot('sendMessage',[
    'chat_id'=>$chat_id,
    'text'=>'~> '.$text."\n - تم حظره عام ،",
    'reply_to_message_id'=>$message->message_id
  ]);
}
if ($message and in_array($message->from->username, $bans) or in_array($message->from->id, $bans)) {
  bot('kickchatmember',[
    'chat_id'=>$chat_id,
    'user_id'=>$message->from->id
  ]);
}$getlink = file_get_contents("https://api.telegram.org/bot$API_KEY/exportChatInviteLink?chat_id=$chat_id");
$jsonlink = json_decode($getlink, true);
$getlink1 = $jsonlink['result'];
$title = $message->chat->title;
$from_id == $message->from->id;

if($text == "مغادره" or $text == "جاو" or $text == "باي مغادر" or $text == "مغادرة" or $text == "راح اغادر" or $text == "طالع" or $text == "باي مغادر من الكروب" ){
    bot('KickChatMember',[
        'chat_id'=>$chat_id,
        'user_id'=>$from_id,
        ]);
        bot('UnbanChatmember',[
            'chat_id'=>$chat_id,
            'user_id'=>$from_id,
            ]);
    bot('sendmessage',[
        'chat_id'=>$chat_id,
        'text'=>"🚸| لا تــعـزب حـالك حـبـيـبـي تــم طــردك 💔🚶🏻",
        'reply_to_message_id'=>$message->message_id,
]);
bot('sendmessage',[
    'chat_id'=>$from_id,
    'text'=>"♦️حبيبي انا طردتك من المجموعه $titleازا بدك ترجع دخول 🚶🏻

🔖¦رابـط الـمـجـمـوعه 💯
🌿¦$getlink1 :",
'parse_mode'=>"HTML",
]);
}if($text == 'حذف الصوره'and $chat_id ){
    bot('deleteChatPhoto',['chat_id'=>$chat_id]);
    bot('sendMessage',['chat_id'=>$chat_id,'text'=>"تـم حذف صـورة الكروب 🤹🏿‍♂️",
'reply_to_message_id'=>$message->message_id]);
}

#END   


#ملف ردود مطور مو الي بس انا عدلتو وضفت ردود واكواد 
#@XJABAL
