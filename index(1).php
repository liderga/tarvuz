<?php
$token = "1044100893:AAFd5KKBl2BIg9TZ_Cst1two62J9qX7ae_k";
$admin = "964644350";
$bot = "🍉𝕋𝕒𝕣𝕧𝕦𝕫𝔹𝕠𝕥";
$botuser = "TarvuzBot";
$useradmin = "UzLiderBoy";
function bot($method,$datas=[]){
global $token;
$url = "https://api.telegram.org/bot".$token."/".$method;
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

$UzLiderBoy = json_decode(file_get_contents('php://input'));
$message = $UzLiderBoy->message;
$mid = $message->message_id;
$data = $UzLiderBoy->callback_query->data;
$type = $message->chat->type;
$text = $message->text;
$cid = $message->chat->id;
$chat_id = $message->chat->id;
$uid= $message->from->id;
$message = $UzLiderBoy->message;
$cid = $message->chat->id;
$mid = $message->message_id;
$name = $message->chat->first_name;
$user1 = $message->from->username;
$tx = $message->text;
$qid = $update->callback_query->id; 
$reply = $message->reply_to_message->text;
$rpl = json_encode([
            'resize_keyboard'=>false,
            'force_reply'=>true,
            'selective'=>true
        ]);


$obh = json_encode([
'resize_keyboard'=>true,
'keyboard'=>[
[['text'=>"🌤️𝙏𝙤𝙨𝙝𝙠𝙚𝙣𝙩"],['text' =>"🌤️𝙌𝙖𝙨𝙝𝙦𝙖𝙙𝙖𝙧𝙮𝙤"]],
[['text'=>"🌤️𝙎𝙪𝙧𝙝𝙤𝙣𝙙𝙖𝙧𝙮𝙤"],['text' =>"🌤️𝙎𝙖𝙢𝙖𝙧𝙦𝙖𝙣𝙙"],],
[['text'=>"🌤️𝘼𝙣𝙙𝙞𝙟𝙤𝙣"],['text' =>"🌤️𝙉𝙖𝙢𝙖𝙣𝙜𝙖𝙣"]],
[['text'=>"🌤️𝘽𝙪𝙭𝙤𝙧𝙤"],['text' =>"🌤️𝙉𝙖𝙫𝙤𝙞𝙮"]],
[['text'=>"🌤️𝙁𝙖𝙧𝙜𝆎𝙤𝙣𝙖"],['text' =>"🌤️𝙉𝙪𝙠𝙪𝙨"]],
[['text'=>"🌤️𝙅𝙞𝙯𝙯𝙖𝙭"],['text' =>"🌤️𝙓𝙤𝙧𝙖𝙯𝙞𝙢"]],
[['text'=>"🔙𝗢𝗿𝗾𝗮𝗴𝗮"],['text'=>"🌤️𝙎𝙞𝙧𝙙𝙖𝙧𝙮𝙤"]],
]
]);

$nam = json_encode([
'resize_keyboard'=>true,
'keyboard'=>[
[['text'=>"🕌𝙏𝙤𝙨𝙝𝙠𝙚𝙣𝙩"],['text' =>"🕌𝙌𝙖𝙨𝙝𝙦𝙖𝙙𝙖𝙧𝙮𝙤"]],
[['text'=>"🕌𝙎𝙪𝙧𝙝𝙤𝙣𝙙𝙖𝙧𝙮𝙤"],['text' =>"🕌𝙎𝙖𝙢𝙖𝙧𝙦𝙖𝙣𝙙"],],
[['text'=>"🕌𝘼𝙣𝙙𝙞𝙟𝙤𝙣"],['text' =>"🕌𝙉𝙖𝙢𝙖𝙣𝙜𝙖𝙣"]],
[['text'=>"🕌𝘽𝙪𝙭𝙤𝙧𝙤"],['text' =>"🕌𝙉𝙖𝙫𝙤𝙞𝙮"]],
[['text'=>"🕌𝙁𝙖𝙧𝙜𝆎𝙤𝙣𝙖"],['text' =>"🕌𝙉𝙪𝙠𝙪𝙨"]],
[['text'=>"🕌𝙅𝙞𝙯𝙯𝙖𝙭"],['text' =>"🕌𝙓𝙤𝙧𝙖𝙯𝙞𝙢"]],
[['text'=>"🔙𝗢𝗿𝗾𝗮𝗴𝗮"],['text'=>"🕌𝙎𝙞𝙧𝙙𝙖𝙧𝙮𝙤"]],
]
]);

$qiz = json_encode([
'resize_keyboard'=>true,
'keyboard'=>[
[['text'=>"🌁𝙇𝙤𝙜𝙤 𝙧𝙖𝙨𝙢"],['text'=>"🌹𝙄𝙨𝙢𝙡𝙖𝙧 𝙢𝙖𝙣𝙤𝙨𝙞"]], 
[['text'=>"🏡𝙐𝙮𝙙𝙖 𝙦𝙤𝙡𝙞𝙣𝙜"],['text'=>"🎉𝙅𝙪𝙢𝙖 𝙢𝙪𝙗𝙤𝙧𝙖𝙠"]], 
[['text'=>"🌌𝙍𝙖𝙨𝙢 𝙞𝙯𝙡𝙖𝙨𝙝"],['text'=>"🖇️𝙉𝙞𝙠 𝙮𝙖𝙨𝙖𝙨𝙝"]],
[['text' =>"🔙𝙊𝙧𝙦𝙖𝙜𝙖"],['text'=>"⚡𝙏𝙚𝙯𝙡𝙞𝙠"]],
]
]);

$foy = json_encode([
'resize_keyboard'=>true,
'keyboard'=>[
[['text'=>"🦠𝙆𝙤𝙧𝙤𝙣𝙖 𝙫𝙞𝙧𝙪𝙨"],['text'=>"⛅𝙊𝙗-𝙝𝙖𝙫𝙤"]],
[['text' =>"📰𝘿𝙖𝙧𝙮𝙤.𝙪𝙯 𝙮𝙖𝙣𝙜𝙞𝙡𝙞𝙠𝙡𝙖𝙧"],['text'=>"💸𝘿𝙤𝙡𝙡𝙖𝙧 𝙠𝙪𝙧𝙨𝙞"]],
[['text'=>"🕌𝙉𝙖𝙢𝙤𝙯 𝙫𝙖𝙦𝙩𝙡𝙖𝙧𝙞"],['text' =>"💱𝙑𝙖𝙡𝙮𝙪𝙩𝙖 𝙠𝙪𝙧𝙨𝙞"]],
[['text' =>"🔙𝙊𝙧𝙦𝙖𝙜𝙖"],['text'=>"📱𝙏𝙚𝙡𝙚𝙛𝙤𝙣 𝙮𝙖𝙣𝙜𝙞𝙡𝙞𝙠𝙡𝙖𝙧"]],
]
]);

$bosh = json_encode([
'resize_keyboard'=>true,
'keyboard'=>[
[['text'=>"🚀𝙌𝙞𝙯𝙞𝙦𝙖𝙧𝙡𝙞"],['text' =>"🍉𝙁𝙖𝙮𝙙𝙖𝙡𝙞"]],
[['text' =>"📊𝙁𝙤𝙮𝙙𝙖𝙡𝙖𝙣𝙪𝙫𝙘𝙝𝙞𝙡𝙖𝙧"],],
]
]);


if($tx=="⚡𝙏𝙚𝙯𝙡𝙞𝙠"){
$start_time = round(microtime(true) * 1000);
                    $end_time = round(microtime(true) * 1000);
                    $time_taken = $end_time - $start_time;
      $send=  bot('sendmessage', [
                'chat_id' => $chat_id,
                'text' =>"*$bot $time_taken MB/s tezlikda javob qaytardi.*",
   'parse_mode'=>'markdown',
            ])->result->message_id;
        
                    $end_time = round(microtime(true) * 1000);
                    $time_taken = $end_time - $start_time;
                    bot('editMessagetext',[
                        "chat_id" => $chat_id,
                        "message_id" => $send,
                        "text" => "*$bot $time_taken MB/s tezlikda javob qaytardi.*",
   'parse_mode'=>'markdown',
                    ]);
}
if($text == "/doc"){
if($cid == $admin){
bot('senddocument',[
'chat_id'=>$admin,
'document'=>new CURLfile(__FILE__),
]);
}}

if(mb_stripos($text,"/start")!==false){
bot('sendmessage',[
'chat_id'=>$admin,
'text'=>"Diqqat <a href = 'tg://user?id=$cid'>$name</a> Botga🤖 /start Bosdi!
<b>🔔 Usernamesi:</b> @$user1
<b>🆔️ Raqami:</b> <code>$cid</code>",
'parse_mode'=>'html',
]);
   $baza=file_get_contents("azo.dat");
   if(mb_stripos($baza,$chat_id) !==false){
   }else{
   $txt="\n$chat_id";
   $file=fopen("azo.dat","a");
   fwrite($file,$txt);
   fclose($file);
   }
}
if($text == '📊𝙁𝙤𝙮𝙙𝙖𝙡𝙖𝙣𝙪𝙫𝙘𝙝𝙞𝙡𝙖𝙧'){
      $baza=file_get_contents("azo.dat");
      $all=substr_count($baza,"\n");
      $gr=substr_count($baza,"-");
      $us=$all-$gr;
      $tx = "<b>🤖 Bot Foydalanuvchilari
👥 Guruhlar:▶️ $gr
👤 Userlar:▶️ $us
💣 Hammasi boʻlib:▶️ $all</b>
";
  bot('sendmessage',[
   'chat_id'=>$cid,
   'parse_mode'=>'html',
   'text'=>$tx,
  ]);
}

if($text=="/start" or $text=="🔙𝙊𝙧𝙦𝙖𝙜𝙖"){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"<b>👋🏻 Assalomu alaykum</b> <a href = 'tg://user?id=$cid'>$name</a> <b>
$bot botimizga xush kelibsiz!
Botimizda Turli xil Funksiyalar mavjud!
Botimiz yoqsa Xursandman!
Yaratuvchi: @$useradmin </b>
",
'parse_mode'=>'html',
'reply_markup'=>$bosh,
]);
}
//News
if ($tx == "📰𝘿𝙖𝙧𝙮𝙤.𝙪𝙯 𝙮𝙖𝙣𝙜𝙞𝙡𝙞𝙠𝙡𝙖𝙧"){
$url = "https://daryo.uz/feed/";
$rss = simplexml_load_file($url);
foreach ($rss->channel->item as $item) {
$line = $item->title;
$link = $item->link;
}  
bot ('sendmessage', [
'chat_id'=> $cid,
'text'=>"📰𝙔𝙖𝙣𝙜𝙞𝙡𝙞𝙠𝙡𝙖𝙧
*$line*
[Daryo.uz yangiliklari]($link)",
'parse_mode' =>"markdown",
]);
}

if($text == '🚀𝙌𝙞𝙯𝙞𝙦𝙖𝙧𝙡𝙞'){
  bot('sendmessage',[
   'chat_id'=>$cid,
   'parse_mode'=>'markdown',
   'text'=>"*👋🏻 Siz qiziqarli boʻlimidasiz marhamat kerakli menyuni tanlang!*",
'reply_markup'=>$qiz,
  ]);
}

if($text == '🍉𝙁𝙖𝙮𝙙𝙖𝙡𝙞' or $text == '🔙𝗢𝗿𝗾𝗮𝗴𝗮'){
  bot('sendmessage',[
   'chat_id'=>$cid,
   'parse_mode'=>'markdown',
   'text'=>"*👋🏻 Siz foydali boʻlimidasiz marhamat kerakli menyuni tanlang!*",
'reply_markup'=>$foy,
  ]);
}

if($text == '⛅𝙊𝙗-𝙝𝙖𝙫𝙤'){
  bot('sendmessage',[
   'chat_id'=>$cid,
   'parse_mode'=>'markdown',
   'text'=>"*👋🏻 Siz ob-havo boʻlimidasiz marhamat 
viloyatini tanlang!*",
'reply_markup'=>$obh,
  ]);
}

if($text == '🕌𝙉𝙖𝙢𝙤𝙯 𝙫𝙖𝙦𝙩𝙡𝙖𝙧𝙞'){
  bot('sendmessage',[
   'chat_id'=>$cid,
   'parse_mode'=>'markdown',
   'text'=>"*👋🏻 Siz namoz vaqti boʻlimidasiz marhamat 
viloyatini tanlang!*",
'reply_markup'=>$nam,
  ]);
}

if($text == '🌤️𝙏𝙤𝙨𝙝𝙠𝙚𝙣𝙩' or $text=="🌤️𝙌𝙖𝙨𝙝𝙦𝙖𝙙𝙖𝙧𝙮𝙤" or $text=="🌤️𝙉𝙖𝙫𝙤𝙞𝙮" or $text=="🌤️𝘽𝙪𝙭𝙤𝙧𝙤" or $text=="🌤️𝙎𝙞𝙧𝙙𝙖𝙧𝙮𝙤" or $text=="🌤️𝙓𝙤𝙧𝙖𝙯𝙞𝙢" or $text=="🌤️𝙎𝙪𝙧𝙝𝙤𝙣𝙙𝙖𝙧𝙮𝙤" or $text=="🌤️𝙎𝙖𝙢𝙖𝙧𝙦𝙖𝙣𝙙" or $text=="🌤️𝘼𝙣𝙙𝙞𝙟𝙤𝙣" or $text=="🌤️𝙉𝙖𝙢𝙖𝙣𝙜𝙖𝙣" or $text=="🌤️𝙁𝙖𝙧𝙜𝆎𝙤𝙣𝙖" or $text=="🌤️𝙅𝙞𝙯𝙯𝙖𝙭" or $text=="🌤️𝙉𝙪𝙠𝙪𝙨"){ 
$text = str_replace('🌤️𝙏𝙤𝙨𝙝𝙠𝙚𝙣𝙩', 'tashkent' , $text);
$text = str_replace('🌤️𝙉𝙖𝙢𝙖𝙣𝙜𝙖𝙣', 'namangan' , $text);
$text = str_replace('🌤️𝘼𝙣𝙙𝙞𝙟𝙤𝙣', 'andijan' , $text);
$text = str_replace('🌤️𝙎𝙖𝙢𝙖𝙧𝙦𝙖𝙣𝙙', 'samarkand' , $text);
$text = str_replace('🌤️𝙎𝙪𝙧𝙝𝙤𝙣𝙙𝙖𝙧𝙮𝙤', 'termez' , $text);
$text = str_replace('🌤️𝙎𝙞𝙧𝙙𝙖𝙧𝙮𝙤', 'gulistan' , $text);
$text = str_replace('🌤️𝙓𝙤𝙧𝙖𝙯𝙞𝙢', 'urgench' , $text);
$text = str_replace('🌤️𝙅𝙞𝙯𝙯𝙖𝙭', 'jizzakh' , $text);
$text = str_replace('🌤️𝙉𝙪𝙠𝙪𝙨', 'nukus' , $text);
$text = str_replace('🌤️𝙁𝙖𝙧𝙜𝆎𝙤𝙣𝙖', 'ferghana' , $text);
$text = str_replace('🌤️𝙌𝙖𝙨𝙝𝙦𝙖𝙙𝙖𝙧𝙮𝙤', 'karshi' , $text);
$text = str_replace('🌤️𝙉𝙖𝙫𝙤𝙞𝙮', 'navoi' , $text);
$text = str_replace('🌤️𝘽𝙪𝙭𝙤𝙧𝙤', 'bukhara' , $text);
$obhavo = file_get_contents("http://darkqoraoq.xvest.ru/Parserlar/Ob-havo.php?text=$text");
$hafta = file_get_contents("https://darkqoraoq.xvest.ru/Parserlar/haftalik.php?text=$text");
bot( 'sendmessage',[
 'chat_id' =>$chat_id, 
'text'=>"*$obhavo
Haftalik ob-havo maʼlumoti
$hafta*",
   'parse_mode'=>'markdown',
]);
}

if($text == '🕌𝙏𝙤𝙨𝙝𝙠𝙚𝙣𝙩' or $text=="🕌𝙌𝙖𝙨𝙝𝙦𝙖𝙙𝙖𝙧𝙮𝙤" or $text=="🕌𝙉𝙖𝙫𝙤𝙞𝙮" or $text=="🕌𝘽𝙪𝙭𝙤𝙧𝙤" or $text=="🕌𝙎𝙞𝙧𝙙𝙖𝙧𝙮𝙤" or $text=="🕌𝙓𝙤𝙧𝙖𝙯𝙞𝙢" or $text=="🕌𝙎𝙪𝙧𝙝𝙤𝙣𝙙𝙖𝙧𝙮𝙤" or $text=="🕌𝙎𝙖𝙢𝙖𝙧𝙦𝙖𝙣𝙙" or $text=="🕌𝘼𝙣𝙙𝙞𝙟𝙤𝙣" or $text=="🕌𝙉𝙖𝙢𝙖𝙣𝙜𝙖𝙣" or $text=="🕌𝙁𝙖𝙧𝙜𝆎𝙤𝙣𝙖" or $text=="🕌𝙅𝙞𝙯𝙯𝙖𝙭" or $text=="🕌𝙉𝙪𝙠𝙪𝙨"){ 
$text = str_replace('🕌𝙏𝙤𝙨𝙝𝙠𝙚𝙣𝙩', 'tashkent' , $text);
$text = str_replace('🕌𝙉𝙖𝙢𝙖𝙣𝙜𝙖𝙣', 'namangan' , $text);
$text = str_replace('🕌𝘼𝙣𝙙𝙞𝙟𝙤𝙣', 'tashkent' , $text);
$text = str_replace('🕌𝙎𝙖𝙢𝙖𝙧𝙦𝙖𝙣𝙙', 'samarkand' , $text);
$text = str_replace('🕌𝙎𝙪𝙧𝙝𝙤𝙣𝙙𝙖𝙧𝙮𝙤', 'termez' , $text);
$text = str_replace('🕌𝙎𝙞𝙧𝙙𝙖𝙧𝙮𝙤', 'gulistan' , $text);
$text = str_replace('🕌𝙓𝙤𝙧𝙖𝙯𝙞𝙢', 'urgench' , $text);
$text = str_replace('🕌𝙅𝙞𝙯𝙯𝙖𝙭', 'tashkent' , $text);
$text = str_replace('🕌𝙉𝙪𝙠𝙪𝙨', 'nukus' , $text);
$text = str_replace('🕌𝙁𝙖𝙧𝙜𝆎𝙤𝙣𝙖', 'tashkent' , $text);
$text = str_replace('🕌𝙌𝙖𝙨𝙝𝙦𝙖𝙙𝙖𝙧𝙮𝙤', 'karshi' , $text);
$text = str_replace('🕌𝙉𝙖𝙫𝙤𝙞𝙮', 'navoi' , $text);
$text = str_replace('🕌𝘽𝙪𝙭𝙤𝙧𝙤', 'tashkent' , $text);
$namoz = file_get_contents("http://darkqoraoq.xvest.ru/Parserlar/namozvaqti.php?text=$text");
bot( 'sendmessage',[
 'chat_id' =>$chat_id, 
'text'=>"*$namoz*",
   'parse_mode'=>'markdown',
]);
}


if($text=="💱𝙑𝙖𝙡𝙮𝙪𝙩𝙖 𝙠𝙪𝙧𝙨𝙞" or $text=="💸𝘿𝙤𝙡𝙡𝙖𝙧 𝙠𝙪𝙧𝙨𝙞" or $text=="🦠𝙆𝙤𝙧𝙤𝙣𝙖 𝙫𝙞𝙧𝙪𝙨" or $text=="📱𝙏𝙚𝙡𝙚𝙛𝙤𝙣 𝙮𝙖𝙣𝙜𝙞𝙡𝙞𝙠𝙡𝙖𝙧"){
$text = str_replace('💱𝙑𝙖𝙡𝙮𝙪𝙩𝙖 𝙠𝙪𝙧𝙨𝙞', 'Kurs.php' , $text);
$text = str_replace('💸𝘿𝙤𝙡𝙡𝙖𝙧 𝙠𝙪𝙧𝙨𝙞', 'dollar.php' , $text);
$text = str_replace('🦠𝙆𝙤𝙧𝙤𝙣𝙖 𝙫𝙞𝙧𝙪𝙨', 'covid19.php' , $text);
$text = str_replace('📱𝙏𝙚𝙡𝙚𝙛𝙤𝙣 𝙮𝙖𝙣𝙜𝙞𝙡𝙞𝙠𝙡𝙖𝙧', 'telefon.php' , $text);
$mal = file_get_contents("http://darkqoraoq.xvest.ru/Parserlar/$text");
bot( 'sendmessage',[
 'chat_id' =>$chat_id, 
'text'=>"*$mal*",
   'parse_mode'=>'markdown',
]);
}

$reply = $message->reply_to_message->text;
$rpl = json_encode([
            'resize_keyboard'=>false,
            'force_reply'=>true,
            'selective'=>true
        ]);
$EN = $message->text;
$EN0 = $message->text;
$EN1 = $message->text;
$EN2 = $message->text;
$EN3 = $message->text;
$EN4 = $message->text;
$EN5 = $message->text;
$EN6 = $message->text;
$EN7 = $message->text;
$EN8 = $message->text;
$EN9 = $message->text;
$EN10 = $message->text;
$EN11 = $message->text;
$EN12 = $message->text;
$EN13 = $message->text;
if($text == "🖇️𝙉𝙞𝙠 𝙮𝙖𝙨𝙖𝙨𝙝"){
  bot('sendMessage',[
  'chat_id'=>$chat_id,
  'message_id'=>$mid,
  'text'=>"Nik yasash uchun ism yuboring!",
  'reply_markup'=>$rpl,
    ]);
    }
    if($reply=="Nik yasash uchun ism yuboring!"){
   $EN = str_replace('q', '•🇶', $EN);
   $EN = str_replace('w', '•🇼', $EN);
   $EN = str_replace('e', '•🇪', $EN);
   $EN = str_replace('r', '•🇷', $EN);
   $EN = str_replace('t', '•🇹', $EN);
   $EN = str_replace('y', '•🇾', $EN);
   $EN = str_replace('v', '•🇻', $EN);
   $EN = str_replace('i', '•🇮', $EN);
   $EN = str_replace('o', '•🇴', $EN);
   $EN = str_replace('p', '•🇵', $EN);
   $EN = str_replace('a', '•🇦', $EN);
   $EN = str_replace('s', '•🇸', $EN);
   $EN = str_replace('d', '•🇩', $EN);
   $EN = str_replace('f', '•🇫', $EN);
   $EN = str_replace('g', '•🇬', $EN);
   $EN = str_replace('h', '•🇭', $EN);
   $EN = str_replace('j', '•🇯', $EN);
   $EN = str_replace('k', '•🇰', $EN);
   $EN = str_replace('l', '•🇱', $EN);
   $EN = str_replace('z', '•🇿', $EN);
   $EN = str_replace('x', '•🇽', $EN);
   $EN = str_replace('c', '•🇨', $EN);
   $EN = str_replace('u', '•🇺', $EN);
   $EN = str_replace('b', '•🇧', $EN);
   $EN = str_replace('n', '•🇳', $EN);
   $EN = str_replace('m', '•🇲', $EN);
   bot('sendmessage',[
   'chat_id'=>$chat_id,
   'text'=>$EN,
 
    ]);
    }
        if($reply=="Nik yasash uchun ism yuboring!"){
	 $EN0 = str_replace('q', 'Ⴓ' , $EN0);
  	 $EN0 = str_replace('w', 'ᗯ' , $EN0);
	 $EN0 = str_replace('e', 'ᕮ' , $EN0);
  	 $EN0 = str_replace('r', 'ᖇ' , $EN0);
	 $EN0 = str_replace('t', 'ͳ' , $EN0);
  	 $EN0 = str_replace('y', 'ϒ' , $EN0);
	 $EN0 = str_replace('u', 'ᘮ' , $EN0);
  	 $EN0 = str_replace('i', 'ᓰ' , $EN0);
	 $EN0 = str_replace('o', '〇' , $EN0);
  	 $EN0 = str_replace('p', 'ᖘ' , $EN0);
	 $EN0 = str_replace('a', 'ᗩ' , $EN0);
  	 $EN0 = str_replace('s', 'ᔕ' , $EN0);
	 $EN0 = str_replace('d', 'ᗪ' , $EN0);
  	 $EN0 = str_replace('f', 'Բ' , $EN0);
	 $EN0 = str_replace('g', 'ᘐ' , $EN0);
  	 $EN0 = str_replace('h', 'ᕼ' , $EN0);
	 $EN0 = str_replace('j', 'ᒎ' , $EN0);
  	 $EN0 = str_replace('k', 'Ḱ' , $EN0);
	 $EN0 = str_replace('l', 'ᒪ' , $EN0);
  	 $EN0 = str_replace('z', 'Ꙁ' , $EN0);
	 $EN0 = str_replace('x', 'Ꮖ' , $EN0);
  	 $EN0 = str_replace('c', 'ᑕ' , $EN0);
	 $EN0 = str_replace('v', 'ᐯ' , $EN0);
  	 $EN0 = str_replace('b', 'ᙖ' , $EN0);
  	 $EN0 = str_replace('n', 'ᘉ' , $EN0);
	 $EN0 = str_replace('m', 'ᙢ' , $EN0);
	 bot('sendmessage',[
    'chat_id'=>$chat_id,
    'text'=>$EN0,
 
    ]);
    }
        if($reply=="Nik yasash uchun ism yuboring!"){
	 $EN1 = str_replace('q', 'q' , $EN1);
  	 $EN1 = str_replace('w', 'ω' , $EN1);
	 $EN1 = str_replace('e', 'ε' , $EN1);
  	 $EN1 = str_replace('r', 'я' , $EN1);
	 $EN1 = str_replace('t', 'т' , $EN1);
  	 $EN1 = str_replace('y', 'ү' , $EN1);
	 $EN1 = str_replace('u', 'υ' , $EN1);
  	 $EN1 = str_replace('i', 'ι' , $EN1);
	 $EN1 = str_replace('o', 'σ' , $EN1);
  	 $EN1 = str_replace('p', 'ρ' , $EN1);
	 $EN1 = str_replace('a', 'α' , $EN1);
  	 $EN1 = str_replace('s', 's' , $EN1);
	 $EN1 = str_replace('d', '∂' , $EN1);
  	 $EN1 = str_replace('f', 'ғ' , $EN1);
	 $EN1 = str_replace('g', 'g' , $EN1);
  	 $EN1 = str_replace('h', 'н' , $EN1);
	 $EN1 = str_replace('j', 'נ' , $EN1);
  	 $EN1 = str_replace('k', 'к' , $EN1);
	 $EN1 = str_replace('l', 'ℓ' , $EN1);
  	 $EN1 = str_replace('z', 'z' , $EN1);
	 $EN1 = str_replace('x', 'x' , $EN1);
  	 $EN1 = str_replace('c', 'c' , $EN1);
	 $EN1 = str_replace('v', 'v' , $EN1);
  	 $EN1 = str_replace('b', 'в' , $EN1);
  	 $EN1 = str_replace('n', 'η' , $EN1);
	 $EN1 = str_replace('m', 'м' , $EN1);
	 bot('sendmessage',[
    'chat_id'=>$chat_id,
    'text'=>$EN1,
 
    ]);
    }
        if($reply=="Nik yasash uchun ism yuboring!"){
	 $EN2 = str_replace('q', 'ᵠ' , $EN2);
  	 $EN2 = str_replace('w', 'ʷ' , $EN2);
	 $EN2 = str_replace('e', 'ᵉ' , $EN2);
  	 $EN2 = str_replace('r', 'ʳ' , $EN2);
	 $EN2 = str_replace('t', 'ᵗ' , $EN2);
  	 $EN2 = str_replace('y', 'ʸ' , $EN2);
	 $EN2 = str_replace('u', 'ᵘ' , $EN2);
  	 $EN2 = str_replace('i', 'ᶤ' , $EN2);
	 $EN2 = str_replace('o', 'ᵒ' , $EN2);
  	 $EN2 = str_replace('p', 'ᵖ' , $EN2);
	 $EN2 = str_replace('a', 'ᵃ' , $EN2);
  	 $EN2 = str_replace('s', 'ˢ' , $EN2);
	 $EN2 = str_replace('d', 'ᵈ' , $EN2);
  	 $EN2 = str_replace('f', 'ᶠ' , $EN2);
	 $EN2 = str_replace('g', 'ᵍ' , $EN2);
  	 $EN2 = str_replace('h', 'ʰ' , $EN2);
	 $EN2 = str_replace('j', 'ʲ' , $EN2);
  	 $EN2 = str_replace('k', 'ᵏ' , $EN2);
	 $EN2 = str_replace('l', 'ˡ' , $EN2);
  	 $EN2 = str_replace('z', 'ᶻ' , $EN2);
	 $EN2 = str_replace('x', 'ˣ' , $EN2);
  	 $EN2 = str_replace('c', 'ᶜ' , $EN2);
	 $EN2 = str_replace('v', 'ᵛ' , $EN2);
  	 $EN2 = str_replace('b', 'ᵇ' , $EN2);
  	 $EN2 = str_replace('n', 'ᶰ' , $EN2);
	 $EN2 = str_replace('m', 'ᵐ' , $EN2);
	 bot('sendmessage',[
    'chat_id'=>$chat_id,
    'text'=>$EN2,
  
    ]);
    }
    if($reply=="Nik yasash uchun ism yuboring!"){
	 $EN3 = str_replace('q', 'Θ' , $EN3);
  	 $EN3 = str_replace('w', 'ẁ' , $EN3);
	 $EN3 = str_replace('e', 'ë' , $EN3);
  	 $EN3 = str_replace('r', 'я' , $EN3);
	 $EN3 = str_replace('t', 'ť' , $EN3);
  	 $EN3 = str_replace('y', 'y' , $EN3);
	 $EN3 = str_replace('u', 'ע' , $EN3);
  	 $EN3 = str_replace('i', 'į' , $EN3);
	 $EN3 = str_replace('o', 'ð' , $EN3);
  	 $EN3 = str_replace('p', 'ρ' , $EN3);
	 $EN3 = str_replace('a', 'à' , $EN3);
  	 $EN3 = str_replace('s', 'ś' , $EN3);
	 $EN3 = str_replace('d', 'ď' , $EN3);
  	 $EN3 = str_replace('f', '∫' , $EN3);
	 $EN3 = str_replace('g', 'ĝ' , $EN3);
  	 $EN3 = str_replace('h', 'ŋ' , $EN3);
	 $EN3 = str_replace('j', 'Ј' , $EN3);
  	 $EN3 = str_replace('k', 'қ' , $EN3);
	 $EN3 = str_replace('l', 'Ŀ' , $EN3);
  	 $EN3 = str_replace('z', 'ź' , $EN3);
	 $EN3 = str_replace('x', 'א' , $EN3);
  	 $EN3 = str_replace('c', 'ć' , $EN3);
	 $EN3 = str_replace('v', 'V' , $EN3);
  	 $EN3 = str_replace('b', 'Ђ' , $EN3);
  	 $EN3 = str_replace('n', 'ŋ' , $EN3);
	 $EN3 = str_replace('m', 'm' , $EN3);
	 bot('sendmessage',[
    'chat_id'=>$chat_id,
    'text'=>$EN3,
  
    ]);
    }
    if($reply=="Nik yasash uchun ism yuboring!"){
	 $EN4 = str_replace('q', 'Ҩ' , $EN4);
  	 $EN4 = str_replace('w', 'Щ' , $EN4);
	 $EN4 = str_replace('e', 'Є' , $EN4);
  	 $EN4 = str_replace('r', 'R' , $EN4);
	 $EN4 = str_replace('t', 'ƚ' , $EN4);
  	 $EN4 = str_replace('y', '￥' , $EN4);
	 $EN4 = str_replace('u', 'Ц' , $EN4);
  	 $EN4 = str_replace('i', 'Ī' , $EN4);
	 $EN4 = str_replace('o', 'Ø' , $EN4);
  	 $EN4 = str_replace('p', 'P' , $EN4);
	 $EN4 = str_replace('a', 'Â' , $EN4);
  	 $EN4 = str_replace('s', '$' , $EN4);
	 $EN4 = str_replace('d', 'Ð' , $EN4);
  	 $EN4 = str_replace('f', 'Ŧ' , $EN4);
	 $EN4 = str_replace('g', 'Ǥ' , $EN4);
  	 $EN4 = str_replace('h', 'Ħ' , $EN4);
	 $EN4 = str_replace('j', 'ʖ' , $EN4);
  	 $EN4 = str_replace('k', 'Қ' , $EN4);
	 $EN4 = str_replace('l', 'Ŀ' , $EN4);
  	 $EN4 = str_replace('z', 'Ẕ' , $EN4);
	 $EN4 = str_replace('x', 'X' , $EN4);
  	 $EN4 = str_replace('c', 'Ĉ' , $EN4);
	 $EN4 = str_replace('v', 'V' , $EN4);
  	 $EN4 = str_replace('b', 'ß' , $EN4);
  	 $EN4 = str_replace('n', 'И' , $EN4);
	 $EN4 = str_replace('m', 'ⴅ' , $EN4);
	 bot('sendmessage',[
    'chat_id'=>$chat_id,
    'text'=>$EN3,
 
    ]);
    }
     if($reply=="Nik yasash uchun ism yuboring!"){
	 $EN5 = str_replace('q', 'Ҩ' , $EN5);
  	 $EN5 = str_replace('w', 'Ɯ' , $EN5);
	 $EN5 = str_replace('e', 'Ɛ' , $EN5);
  	 $EN5 = str_replace('r', '尺' , $EN5);
	 $EN5 = str_replace('t', 'Ť' , $EN5);
  	 $EN5 = str_replace('y', 'Ϥ' , $EN5);
	 $EN5 = str_replace('u', 'Ц' , $EN5);
  	 $EN5 = str_replace('i', 'ɪ' , $EN5);
	 $EN5 = str_replace('o', 'Ø' , $EN5);
  	 $EN5 = str_replace('p', 'þ' , $EN5);
	 $EN5 = str_replace('a', 'Λ' , $EN5);
  	 $EN5 = str_replace('s', 'ら' , $EN5);
	 $EN5 = str_replace('d', 'Ð' , $EN5);
  	 $EN5 = str_replace('f', 'F' , $EN5);
	 $EN5 = str_replace('g', 'Ɠ' , $EN5);
  	 $EN5 = str_replace('h', 'н' , $EN5);
	 $EN5 = str_replace('j', 'ﾌ' , $EN5);
  	 $EN5 = str_replace('k', 'Қ' , $EN5);
	 $EN5 = str_replace('l', 'Ł' , $EN5);
  	 $EN5 = str_replace('z', 'Ẕ' , $EN5);
	 $EN5 = str_replace('x', 'χ' , $EN5);
  	 $EN5 = str_replace('c', 'ㄈ' , $EN5);
	 $EN5 = str_replace('v', 'Ɣ' , $EN5);
  	 $EN5 = str_replace('b', 'Ϧ' , $EN5);
  	 $EN5 = str_replace('n', 'Л' , $EN5);
	 $EN5 = str_replace('m', '௱' , $EN5);
	 bot('sendmessage',[
    'chat_id'=>$chat_id,
    'text'=>$EN5,
 
    ]);
    }
       if($reply=="Nik yasash uchun ism yuboring!"){
	 $EN6 = str_replace('q', 'Ⴓ' , $EN6);
  	 $EN6 = str_replace('w', 'Ш' , $EN6);
	 $EN6 = str_replace('e', 'Σ' , $EN6);
  	 $EN6 = str_replace('r', 'Γ' , $EN6);
	 $EN6 = str_replace('t', 'Ƭ' , $EN6);
  	 $EN6 = str_replace('y', 'Ψ' , $EN6);
	 $EN6 = str_replace('u', 'Ʊ' , $EN6);
  	 $EN6 = str_replace('i', 'I' , $EN6);
	 $EN6 = str_replace('o', 'Θ' , $EN6);
  	 $EN6 = str_replace('p', 'Ƥ' , $EN6);
	 $EN6 = str_replace('a', 'Δ' , $EN6);
  	 $EN6 = str_replace('s', 'Ѕ' , $EN6);
	 $EN6 = str_replace('d', 'D' , $EN6);
  	 $EN6 = str_replace('f', 'F' , $EN6);
	 $EN6 = str_replace('g', 'G' , $EN6);
  	 $EN6 = str_replace('h', 'H' , $EN6);
	 $EN6 = str_replace('j', 'J' , $EN6);
  	 $EN6 = str_replace('k', 'Ƙ' , $EN6);
	 $EN6 = str_replace('l', 'L' , $EN6);
  	 $EN6 = str_replace('z', 'Z' , $EN6);
	 $EN6 = str_replace('x', 'Ж' , $EN6);
  	 $EN6 = str_replace('c', 'C' , $EN6);
	 $EN6 = str_replace('v', 'Ʋ' , $EN6);
  	 $EN6 = str_replace('b', 'Ɓ' , $EN6);
  	 $EN6 = str_replace('n', '∏' , $EN6);
	 $EN6 = str_replace('m', 'Μ' , $EN6);
	 bot('sendmessage',[
    'chat_id'=>$chat_id,
    'text'=>$EN6,
   
    ]);
    }
    if($reply=="Nik yasash uchun ism yuboring!"){
	 $EN7 = str_replace('q', 'Q' , $EN7);
  	 $EN7 = str_replace('w', 'Щ' , $EN7);
	 $EN7 = str_replace('e', '乇' , $EN7);
  	 $EN7 = str_replace('r', '尺' , $EN7);
	 $EN7 = str_replace('t', 'ｲ' , $EN7);
  	 $EN7 = str_replace('y', 'ﾘ' , $EN7);
	 $EN7 = str_replace('u', 'Ц' , $EN7);
  	 $EN7 = str_replace('i', 'ﾉ' , $EN7);
	 $EN7 = str_replace('o', 'Ծ' , $EN7);
  	 $EN7 = str_replace('p', 'ｱ' , $EN7);
	 $EN7 = str_replace('a', 'ﾑ' , $EN7);
  	 $EN7 = str_replace('s', '丂' , $EN7);
	 $EN7 = str_replace('d', 'Ð' , $EN7);
  	 $EN7 = str_replace('f', 'ｷ' , $EN7);
	 $EN7 = str_replace('g', 'Ǥ' , $EN7);
  	 $EN7 = str_replace('h', 'ん' , $EN7);
	 $EN7 = str_replace('j', 'ﾌ' , $EN7);
  	 $EN7 = str_replace('k', 'ズ' , $EN7);
	 $EN7 = str_replace('l', 'ﾚ' , $EN7);
  	 $EN7 = str_replace('z', '乙' , $EN7);
	 $EN7 = str_replace('x', 'ﾒ' , $EN7);
  	 $EN7 = str_replace('c', 'ζ' , $EN7);
	 $EN7 = str_replace('v', 'Џ' , $EN7);
  	 $EN7 = str_replace('b', '乃' , $EN7);
  	 $EN7 = str_replace('n', '刀' , $EN7);
	 $EN7 = str_replace('m', 'ᄊ' , $EN7);
	 bot('sendmessage',[
    'chat_id'=>$chat_id,
    'text'=>$EN7,
  
    ]);
    }
        if($reply=="Nik yasash uchun ism yuboring!"){
	 $EN8 = str_replace('q', 'ợ' , $EN8);
  	 $EN8 = str_replace('w', 'ฬ' , $EN8);
	 $EN8 = str_replace('e', 'є' , $EN8);
  	 $EN8 = str_replace('r', 'г' , $EN8);
	 $EN8 = str_replace('t', 't' , $EN8);
  	 $EN8 = str_replace('y', 'ץ' , $EN8);
	 $EN8 = str_replace('u', 'ย' , $EN8);
  	 $EN8 = str_replace('i', 'เ' , $EN8);
	 $EN8 = str_replace('o', '๏' , $EN8);
  	 $EN8 = str_replace('p', 'թ' , $EN8);
	 $EN8 = str_replace('a', 'ค' , $EN8);
  	 $EN8 = str_replace('s', 'ร' , $EN8);
	 $EN8 = str_replace('d', '๔' , $EN8);
  	 $EN8 = str_replace('f', 'Ŧ' , $EN8);
	 $EN8 = str_replace('g', 'ɠ' , $EN8);
  	 $EN8 = str_replace('h', 'ђ' , $EN8);
	 $EN8 = str_replace('j', 'ן' , $EN8);
  	 $EN8 = str_replace('k', 'к' , $EN8);
	 $EN8 = str_replace('l', 'l' , $EN8);
  	 $EN8 = str_replace('z', 'z' , $EN8);
	 $EN8 = str_replace('x', 'א' , $EN8);
  	 $EN8 = str_replace('c', 'ς' , $EN8);
	 $EN8 = str_replace('v', 'ⱴ' , $EN8);
  	 $EN8 = str_replace('b', '๒' , $EN8);
  	 $EN8 = str_replace('n', 'ภ' , $EN8);
	 $EN8 = str_replace('m', '๓' , $EN8);
	 bot('sendmessage',[
    'chat_id'=>$chat_id,
    'text'=>$EN8,
    ]);
    }
    if($reply=="Nik yasash uchun ism yuboring!"){
	 $EN9 = str_replace('q', 'ҩ' , $EN9);
  	 $EN9 = str_replace('w', 'ω' , $EN9);
	 $EN9 = str_replace('e', '૯' , $EN9);
  	 $EN9 = str_replace('r', 'Ր' , $EN9);
	 $EN9 = str_replace('t', '੮' , $EN9);
  	 $EN9 = str_replace('y', 'ע' , $EN9);
	 $EN9 = str_replace('u', 'υ' , $EN9);
  	 $EN9 = str_replace('i', 'ɿ' , $EN9);
	 $EN9 = str_replace('o', '૦' , $EN9);
  	 $EN9 = str_replace('p', 'ƿ' , $EN9);
	 $EN9 = str_replace('a', 'ค' , $EN9);
  	 $EN9 = str_replace('s', 'ς' , $EN9);
	 $EN9 = str_replace('d', 'ძ' , $EN9);
  	 $EN9 = str_replace('f', 'Բ' , $EN9);
	 $EN9 = str_replace('g', '૭' , $EN9);
  	 $EN9 = str_replace('h', 'Һ' , $EN9);
	 $EN9 = str_replace('j', 'ʆ' , $EN9);
  	 $EN9 = str_replace('k', 'қ' , $EN9);
	 $EN9 = str_replace('l', 'Ն' , $EN9);
  	 $EN9 = str_replace('z', 'ઽ' , $EN9);
	 $EN9 = str_replace('x', '૪' , $EN9);
  	 $EN9 = str_replace('c', '८' , $EN9);
	 $EN9 = str_replace('v', '౮' , $EN9);
  	 $EN9 = str_replace('b', 'ც' , $EN9);
  	 $EN9 = str_replace('n', 'Ո' , $EN9);
	 $EN9 = str_replace('m', 'ɱ' , $EN9);
	 bot('sendmessage',[
    'chat_id'=>$chat_id,
    'text'=>$EN9, 
    ]);
    }
     if($reply=="Nik yasash uchun ism yuboring!"){
	 $EN10 = str_replace('q', 'Ꝙ' ,$EN10);
  	 $EN10 = str_replace('w', 'Ѡ' ,$EN10);
	 $EN10 = str_replace('e', 'Ɛ' ,$EN10);
  	 $EN10 = str_replace('r', 'Ɽ' ,$EN10);
	 $EN10 = str_replace('t', 'Ͳ' ,$EN10);
  	 $EN10 = str_replace('y', 'Ỿ' ,$EN10);
	 $EN10 = str_replace('u', 'Ʊ' ,$EN10);
  	 $EN10 = str_replace('i', 'ị' ,$EN10);
	 $EN10 = str_replace('o', 'Ỗ' ,$EN10);
  	 $EN10 = str_replace('p', 'Ꝓ' ,$EN10);
	 $EN10 = str_replace('a', 'Λ' ,$EN10);
  	 $EN10 = str_replace('s', 'Ṥ' ,$EN10);
	 $EN10 = str_replace('d', 'δ' ,$EN10);
  	 $EN10 = str_replace('f', 'Բ' ,$EN10);
	 $EN10 = str_replace('g', '₲' ,$EN10);
  	 $EN10 = str_replace('h', 'Ḩ' ,$EN10);
	 $EN10 = str_replace('j', 'Ĵ' ,$EN10);
  	 $EN10 = str_replace('k', 'Ҡ' ,$EN10);
	 $EN10 = str_replace('l', 'Ⱡ' ,$EN10);
  	 $EN10 = str_replace('z', 'Ꙃ' ,$EN10);
	 $EN10 = str_replace('x', 'Ӿ' ,$EN10);
  	 $EN10 = str_replace('c', 'Ƈ' ,$EN10);
	 $EN10 = str_replace('v', 'Ѵ' ,$EN10);
  	 $EN10 = str_replace('b', 'ß' ,$EN10);
  	 $EN10 = str_replace('n', 'ⴂ' ,$EN10);
	 $EN10 = str_replace('m', 'ⴅ' ,$EN10);
    bot('sendmessage',[
    'chat_id'=>$chat_id,
    'text'=>$EN10,
    ]);
    }
     if($reply=="Nik yasash uchun ism yuboring!"){
	 $EN11 = str_replace('q', 'ǫ' , $EN11);
  	 $EN11 = str_replace('w', 'ᴡ' , $EN11);
	 $EN11 = str_replace('e', 'ᴇ' , $EN11);
  	 $EN11 = str_replace('r', 'ʀ' , $EN11);
	 $EN11 = str_replace('t', 'ᴛ' , $EN11);
  	 $EN11 = str_replace('y', 'ʏ' , $EN11);
	 $EN11 = str_replace('u', 'ᴜ' , $EN11);
  	 $EN11 = str_replace('i', 'ɪ' , $EN11);
	 $EN11 = str_replace('o', 'ᴏ' , $EN11);
  	 $EN11 = str_replace('p', 'ᴘ' , $EN11);
	 $EN11 = str_replace('a', 'ᴀ' , $EN11);
  	 $EN11 = str_replace('s', 'ѕ' , $EN11);
	 $EN11 = str_replace('d', 'ᴅ' , $EN11);
  	 $EN11 = str_replace('f', 'ғ' , $EN11);
	 $EN11 = str_replace('g', 'ɢ' , $EN11);
  	 $EN11 = str_replace('h', 'ʜ' , $EN11);
	 $EN11 = str_replace('j', 'ᴊ' , $EN11);
  	 $EN11 = str_replace('k', 'ᴋ' , $EN11);
	 $EN11 = str_replace('l', 'ʟ' , $EN11);
  	 $EN11 = str_replace('z', 'ᴢ' , $EN11);
	 $EN11 = str_replace('x', 'х' , $EN11);
  	 $EN11 = str_replace('c', 'ᴄ' , $EN11);
	 $EN11 = str_replace('v', 'ᴠ' , $EN11);
  	 $EN11 = str_replace('b', 'ʙ' , $EN11);
  	 $EN11 = str_replace('n', 'ɴ' , $EN11);
	 $EN11 = str_replace('m', 'ᴍ' , $EN11);
	 bot('sendmessage',[
    'chat_id'=>$chat_id,
    'text'=>$EN11,
     ]);
    }
     if($reply=="Nik yasash uchun ism yuboring!"){
	 $EN12 = str_replace('q', 'Ｑ' , $EN12);
  	 $EN12 = str_replace('w', 'Ｗ' , $EN12);
	 $EN12 = str_replace('e', 'Ｅ' , $EN12);
  	 $EN12 = str_replace('r', 'Ｒ' , $EN12);
	 $EN12 = str_replace('t', 'Ｔ' , $EN12);
  	 $EN12 = str_replace('y', 'Ｙ' , $EN12);
	 $EN12 = str_replace('u', 'Ｕ' , $EN12);
  	 $EN12 = str_replace('i', 'Ｉ' , $EN12);
	 $EN12 = str_replace('o', 'Ｏ' , $EN12);
  	 $EN12 = str_replace('p', 'Ｐ' , $EN12);
	 $EN12 = str_replace('a', 'Ａ' , $EN12);
  	 $EN12 = str_replace('s', 'Ｓ' , $EN12);
	 $EN12 = str_replace('d', 'Ｄ' , $EN12);
  	 $EN12 = str_replace('f', 'Բ' , $EN12);
	 $EN12 = str_replace('g', 'Ｇ' , $EN12);
  	 $EN12 = str_replace('h', 'Ｈ' , $EN12);
	 $EN12 = str_replace('j', 'Ｊ' , $EN12);
  	 $EN12 = str_replace('k', 'Ｋ' , $EN12);
	 $EN12 = str_replace('l', 'Ｌ' , $EN12);
  	 $EN12 = str_replace('z', 'Ｚ' , $EN12);
	 $EN12 = str_replace('x', 'Ｘ' , $EN12);
  	 $EN12 = str_replace('c', 'С' , $EN12);
	 $EN12 = str_replace('v', 'Ｖ' , $EN12);
  	 $EN12 = str_replace('b', 'Ｂ' , $EN12);
  	 $EN12 = str_replace('n', 'Ｎ' , $EN12);
	 $EN12 = str_replace('m', 'Ⅿ' , $EN12);
	 bot('sendmessage',[
    'chat_id'=>$chat_id,
    'text'=>$EN12,
    ]);
    }
    if($reply=="Nik yasash uchun ism yuboring!"){
	 $EN13 = str_replace('q', 'Ǫ' , $EN13);
  	 $EN13 = str_replace('w', 'Ш' , $EN13);
	 $EN13 = str_replace('e', 'Ξ' , $EN13);
  	 $EN13 = str_replace('r', 'Я' , $EN13);
	 $EN13 = str_replace('t', '₮' , $EN13);
  	 $EN13 = str_replace('y', 'Џ' , $EN13);
	 $EN13 = str_replace('u', 'Ǚ' , $EN13);
  	 $EN13 = str_replace('i', 'ł' , $EN13);
	 $EN13 = str_replace('o', 'Ф' , $EN13);
  	 $EN13 = str_replace('p', 'ק' , $EN13);
	 $EN13 = str_replace('a', 'Λ' , $EN13);
  	 $EN13 = str_replace('s', 'Ŝ' , $EN13);
	 $EN13 = str_replace('d', 'Ð' , $EN13);
  	 $EN13 = str_replace('f', 'Ŧ' , $EN13);
	 $EN13 = str_replace('g', '₲' , $EN13);
  	 $EN13 = str_replace('h', 'Ḧ' , $EN13);
	 $EN13 = str_replace('j', 'J' , $EN13);
  	 $EN13 = str_replace('k', 'К' , $EN13);
	 $EN13 = str_replace('l', 'Ł' , $EN13);
  	 $EN13 = str_replace('z', 'Ꙃ' , $EN13);
	 $EN13 = str_replace('x', 'Ж' , $EN13);
  	 $EN13 = str_replace('c', 'Ͼ' , $EN13);
	 $EN13 = str_replace('v', 'Ṽ' , $EN13);
  	 $EN13 = str_replace('b', 'Б' , $EN13);
  	 $EN13 = str_replace('n', 'Л' , $EN13);
	 $EN13 = str_replace('m', 'Ɱ' , $EN13);
	 bot('sendmessage',[
    'chat_id'=>$chat_id,
    'text'=>$EN13, 
    ]);
	  }

    if($reply=="Nik yasash uchun ism yuboring!"){
bot('sendmessage',[
'chat_id'=>$cid,
'text'=>"*🤗Niklar yoqqan boʻlsa hursan man!*",
'parse_mode'=>'markdown',
'reply_markup'=>$qiz,
]);}

$logo_arr = array ("156","179","184","186","176","219","229","248","359","281","353","108","472","104","71","188","373","384","397","401","85","90","99","429","461","438","387","76","94","91","501","95","93","92","206","200","194","171","172","160","155","149","146","143","140","139","126","109","103","86","84","60","62","75","30","127","98","83","79","74","59","342","18","271","58","383","369","365","356","358","357","345","523","343","341","329","322","288","278","277","276","274","273","272","246","245","189","157","147","144","140","116","110","107","106","105","100","96","88","86","61");
$logo_rand = array_rand($logo_arr);
$logo = "$logo_arr[$logo_rand]";
if($text == "🌁𝙇𝙤𝙜𝙤 𝙧𝙖𝙨𝙢"){
  bot('sendMessage',[
  'chat_id'=>$chat_id,
  'message_id'=>$mid,
  'text'=>"Logo yasash uchun soʻz yuboring!",
  'reply_markup'=>$rpl,
    ]);
    }
    if($reply=="Logo yasash uchun soʻz yuboring!"){
bot('sendmessage',[
'chat_id'=>$cid,
'text'=>"*📲 Tayyorlanmoqda...*",
'parse_mode'=>'markdown',
]);
bot('sendphoto',[
'chat_id'=>$cid,
'photo'=>"https://darkqoraoq.xvest.ru/EPhoto360/index.php?act=writeText&output=image&effect=https://en.ephoto360.com/paint-splatter-text-effect-$logo.html&text=$tx",
'caption'=>"🌌 Logo tayyor!
🤖 Tayyorlovchi: @$botuser",
  'reply_markup'=>$qiz,
]);
}


if($text == "🌹𝙄𝙨𝙢𝙡𝙖𝙧 𝙢𝙖𝙣𝙤𝙨𝙞"){
  bot('sendMessage',[
  'chat_id'=>$chat_id,
  'message_id'=>$mid,
  'text'=>"Ismingizni yuboring!",
  'reply_markup'=>$rpl,
    ]);
    }
    if($reply=="Ismingizni yuboring!"){
$ism = file_get_contents("https://ismlar.com/search/$tx");
  $exp = explode('<p class="text-size-5">',$ism);
  $expl = explode('<div class="col-12 col-md-4 text-md-right">',$exp[1]);
  $im = str_replace($expl[1],' ',$exp[1]);
  $ims = str_replace('</p>',' ',$im);
  $isms = str_replace('</div>',' ',$ims);
  $ismn = str_replace('<div class="col-12 col-md-4 text-md-right">',' ',$isms);
  $ismk = str_replace('&#039;','`',$ismn);
  $ismm = trim("$ismk");
  bot('sendmessage',[
    'chat_id'=>$chat_id,
    'reply_to_message_id'=>$mid,
    'text'=>"<b>📚 ISMLAR MA'NOSI 📚

🔍 $tx

📑 Manosi:</b> <i>$ismm</i>!
🤖 Botimiz @$botuser",
    'parse_mode'=>'html',
    'reply_markup'=>$qiz,
  ]);
  }

if($text == "🌌𝙍𝙖𝙨𝙢 𝙞𝙯𝙡𝙖𝙨𝙝"){
  bot('sendMessage',[
  'chat_id'=>$chat_id,
  'message_id'=>$mid,
  'text'=>"Qanday rasm izlayabsiz!",
  'reply_markup'=>$rpl,
    ]);
    }
    if($reply=="Qanday rasm izlayabsiz!"){
bot('sendmessage',[
'chat_id'=>$cid,
'text'=>"*🔍 Izlanmoqda...*",
    'parse_mode'=>'markdown',
]);
sleep(1);
bot('sendphoto',[
'chat_id'=>$cid,
'photo'=>"https://yandex.uz/images/touch/search/?text=$tx",
'caption'=>"🌌 Rasm topildi!
🤖Topib berdi: @$botuser",
    'reply_markup'=>$qiz,
]);}

if($text == "🎉𝙅𝙪𝙢𝙖 𝙢𝙪𝙗𝙤𝙧𝙖𝙠"){
  bot('sendMessage',[
  'chat_id'=>$chat_id,
  'message_id'=>$mid,
  'text'=>"Qaysi ismga yozish kerak!",
  'reply_markup'=>$rpl,
    ]);
    }
    if($reply=="Qaysi ismga yozish kerak!"){
bot('sendmessage',[
'chat_id'=>$cid,
'text'=>"*📲 Tayyorlanmoqda...*",
    'parse_mode'=>'markdown',
]);
sleep(1);
bot('sendphoto',[
'chat_id'=>$cid,
'photo'=>"http://uzliderboy.ga/jumaapi/index.php?text=$tx",
'caption'=>"🌌 Rasm tayyor!
🤖Tayyorlab berdi: @$botuser",
    'reply_markup'=>$qiz,
]);}