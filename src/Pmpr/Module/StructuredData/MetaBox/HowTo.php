<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6240126d67fd7             |
    |_______________________________________|
*/
 namespace Pmpr\Module\StructuredData\MetaBox; use Pmpr\Common\Foundation\Convert\Type\ConvertArray; use Pmpr\Common\Foundation\Manipulate\Post\ManipulatePost; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateNumber; use Pmpr\Common\Foundation\Media\Icon\Interfaces\IconFontawesomeInterface; use Pmpr\Module\StructuredData\DataType\Instruction; use Pmpr\Module\StructuredData\Setting\Setting; class HowTo extends Tab { const uqgisaggcgmekkog = "\150\x6f\167\x74\157\x5f"; const geiigmeyouakiawq = self::uqgisaggcgmekkog . "\x74\157\157\x6c\x73"; const ckyksesoyeugoiyw = self::uqgisaggcgmekkog . "\x73\164\145\x70\x73"; const aiuciaomueaooauq = self::uqgisaggcgmekkog . "\163\x75\160\x70\x6c\x69\145\163"; const qyieuqcescsakwga = self::uqgisaggcgmekkog . "\x74\157\x74\141\x6c\137\164\x69\x6d\x65"; const gaaismkuoysggwye = "\x69\156\x73\164\x72\x75\x63\x74\151\157\156\163"; const iycyqgwoeeoioami = self::uqgisaggcgmekkog . "\x74\x6f\x74\x61\x6c\x5f\164\151\155\145\137\x75\156\151\x74"; const skcomskcaowwkycu = self::uqgisaggcgmekkog . "\x64\145\x73\x63\x72\x69\x70\164\x69\157\156"; const qqyqkusqcmeqssck = self::uqgisaggcgmekkog . "\145\x73\x74\151\x6d\141\x74\145\x64\x5f\166\141\154\x75\x65"; const acokgesogaukygye = self::uqgisaggcgmekkog . "\x65\x73\x74\151\155\x61\164\145\144\x5f\143\165\162\x72\145\x6e\x63\x79"; public function eweuqkioyiiiqgcw($post) { $omauuckqmiemgegq = $this->seyyiqmgwymyumoq($post); if (!$omauuckqmiemgegq) { goto gsygwgsiawgmqiyi; } $imeywacwecgemcco = ManipulateArray::get($omauuckqmiemgegq, "\143\157\x73\164"); $wwigiesyquoeawog = ManipulateArray::get($omauuckqmiemgegq, "\x63\165\x72\x72\x65\x6e\143\171"); if (!($imeywacwecgemcco && $wwigiesyquoeawog)) { goto suqcsgaosywaauuu; } $imeywacwecgemcco = $this->wusgwkaycokeckqs(ManipulateNumber::uwwmyomsqkoaqawa($imeywacwecgemcco)); $wwigiesyquoeawog = $wwigiesyquoeawog == "\125\123\104" ? __("\x44\x6f\x6c\154\141\x72", PR__MOD__STRUCTURED_DATA) : __("\122\151\141\154", PR__MOD__STRUCTURED_DATA); $omauuckqmiemgegq->cost = "{$imeywacwecgemcco}\40{$wwigiesyquoeawog}"; suqcsgaosywaauuu: $cqgoimumaewouews = ManipulateArray::get($omauuckqmiemgegq, "\x74\151\x6d\x65"); $iyqygqimawuycsyq = ManipulateArray::get($omauuckqmiemgegq, "\x75\156\151\164"); if (!($cqgoimumaewouews && $iyqygqimawuycsyq)) { goto wwukgaquuyoissgy; } $omauuckqmiemgegq->time = $this->yccawocmoqqoscuq($cqgoimumaewouews, $iyqygqimawuycsyq); wwukgaquuyoissgy: echo $this->iuygowkemiiwqmiw("\x63\141\162\144", ["\x68\x6f\x77\x74\157" => $omauuckqmiemgegq, "\164\x69\164\x6c\145" => __("\110\157\167\40\124\157\40\x44\117", PR__MOD__STRUCTURED_DATA), "\143\157\163\164\x5f\x74\x69\164\154\145" => __("\x43\x6f\x73\164", PR__MOD__STRUCTURED_DATA), "\164\151\x6d\x65\137\164\151\164\x6c\145" => __("\x54\157\164\x61\154\x20\x54\x69\155\145", PR__MOD__STRUCTURED_DATA), "\163\x74\145\x70\x73\x5f\x74\151\x74\154\x65" => __("\123\164\145\x70\163", PR__MOD__STRUCTURED_DATA), "\x74\157\157\154\x73\x5f\x74\x69\x74\154\x65" => __("\124\x6f\x6f\x6c\163", PR__MOD__STRUCTURED_DATA), "\x73\x75\x70\160\x6c\151\145\x73\x5f\x74\x69\x74\154\x65" => __("\x53\165\160\x70\x6c\x69\x65\x73", PR__MOD__STRUCTURED_DATA), "\x73\x74\145\x70\x5f\x74\151\164\154\145\x5f\x6d\141\x73\x6b" => __("\x53\x74\145\160\x20\x25\x73\72\40\45\x73", PR__MOD__STRUCTURED_DATA)]); gsygwgsiawgmqiyi: parent::eweuqkioyiiiqgcw($post); } public function seyyiqmgwymyumoq($post = null) { $icwicymcioeyeyek = parent::seyyiqmgwymyumoq($post); if ($icwicymcioeyeyek) { goto egmayaiikwsskgmy; } $post = ManipulatePost::get($post); if (!$post) { goto mysueeoswqgccmui; } $sieqmaaeyogyamwk = $cqgoimumaewouews = ManipulatePost::igawqaomowicuayw(self::qyieuqcescsakwga, $post); $wowwosiimcqeokuo = ManipulatePost::igawqaomowicuayw(self::iycyqgwoeeoioami, $post); if (!($cqgoimumaewouews && $wowwosiimcqeokuo)) { goto qsgqwyqaqiowkmco; } $sieqmaaeyogyamwk = sprintf($wowwosiimcqeokuo, $cqgoimumaewouews); qsgqwyqaqiowkmco: $asuggasaseaacmqu = ConvertArray::wauqeqkcymgoceuy(ManipulatePost::igawqaomowicuayw(self::ckyksesoyeugoiyw, $post)); if (!$asuggasaseaacmqu) { goto aueaceeyommgkicu; } foreach ($asuggasaseaacmqu as $wyeyeaaekyoyimqu) { $mieuwqqskaueukye = ManipulateArray::get($wyeyeaaekyoyimqu, self::gaaismkuoysggwye, []); if (!$mieuwqqskaueukye) { goto zayqqeqgcwkekwws; } $mieuwqqskaueukye = preg_split("\57\x5c\162\134\156\174\x5c\x6e\174\x5c\162\57", $mieuwqqskaueukye); if (!($mieuwqqskaueukye && is_array($mieuwqqskaueukye))) { goto oqousikwiiqagoyw; } $mieuwqqskaueukye = array_filter($mieuwqqskaueukye); foreach ($mieuwqqskaueukye as $momcykaoccoymeig => $imiasuqakwyyyemq) { if (!rtrim($imiasuqakwyyyemq)) { goto aiccyaswigkaycqk; } $igqsaukqcqscimok = $this->ywayygsauoeyiasi($imiasuqakwyyyemq, $momcykaoccoymeig + 1); $mieuwqqskaueukye[$momcykaoccoymeig] = $igqsaukqcqscimok; aiccyaswigkaycqk: usymasgsyqgsuocg: } eucqomyqykgoiuge: $mcqieaigyeeyaksm = ManipulateArray::get($wyeyeaaekyoyimqu, self::mkousmkiawwousws . "\137\x69\144"); if ($mcqieaigyeeyaksm) { goto sqyokemumceysegy; } $wyeyeaaekyoyimqu->{self::mkousmkiawwousws . "\x5f\x69\x64"} = Setting::ygyiswukccscuqmm(); sqyokemumceysegy: $wyeyeaaekyoyimqu->{self::gaaismkuoysggwye} = $mieuwqqskaueukye; oqousikwiiqagoyw: zayqqeqgcwkekwws: qikaewekoecykeou: } yqagomygmeoecwey: $icwicymcioeyeyek = ["\x63\157\x73\164" => ManipulatePost::igawqaomowicuayw(self::qqyqkusqcmeqssck, $post), "\164\151\155\145" => $cqgoimumaewouews, "\x75\156\151\x74" => $wowwosiimcqeokuo, "\x74\157\x6f\x6c\x73" => ConvertArray::wauqeqkcymgoceuy(ManipulatePost::igawqaomowicuayw(self::geiigmeyouakiawq, $post)), "\x73\x74\145\160\x73" => $asuggasaseaacmqu, "\164\151\164\x6c\x65" => ManipulatePost::qcgakseyaikigqco($post), "\151\155\141\147\x65" => ManipulatePost::wsiiswmaagmyiaiw($post), "\163\x75\160\x70\154\x69\145\x73" => ConvertArray::wauqeqkcymgoceuy(ManipulatePost::igawqaomowicuayw(self::aiuciaomueaooauq, $post)), "\143\165\x72\x72\145\156\x63\x79" => ManipulatePost::igawqaomowicuayw(self::acokgesogaukygye, $post), "\164\157\x74\x61\x6c\124\151\155\145" => $sieqmaaeyogyamwk, "\144\145\163\143\162\x69\160\164\151\x6f\x6e" => ManipulatePost::igawqaomowicuayw(self::skcomskcaowwkycu, $post)]; $icwicymcioeyeyek = ConvertArray::kamisyecckmwywwo($icwicymcioeyeyek); aueaceeyommgkicu: mysueeoswqgccmui: egmayaiikwsskgmy: return $icwicymcioeyeyek; } public function aoukuouwimcigeqe($ywoucyskcquysiwc = []) { $ywoucyskcquysiwc[] = Setting::sgsmqaoowiyocqaa("\150\157\x77\164\157\x5f\x74\x61\x62", __("\x48\117\127\x2d\x54\117", PR__MOD__STRUCTURED_DATA))->mkksewyosgeumwsa(Setting::ymuegqgyuagyucws(self::qyieuqcescsakwga, __("\x54\157\164\x61\154\x20\124\x69\x6d\x65", PR__MOD__STRUCTURED_DATA))->escqqisecooswqgo()->oiwawawcmigageco(6))->mkksewyosgeumwsa(Setting::ckuwucygcwsiawms(self::iycyqgwoeeoioami, __("\124\157\x74\x61\154\40\x54\x69\155\x65\40\125\x6e\x69\164", PR__MOD__STRUCTURED_DATA), ["\160\164\x25\163\155" => __("\x4d\x69\156\x75\164\145", PR__MOD__STRUCTURED_DATA), "\x70\164\x25\163\150" => __("\110\157\165\162", PR__MOD__STRUCTURED_DATA), "\160\45\163\x64" => __("\x44\141\x79", PR__MOD__STRUCTURED_DATA)])->oiwawawcmigageco(6))->mkksewyosgeumwsa(Setting::ymuegqgyuagyucws(self::qqyqkusqcmeqssck, __("\x45\x73\164\x69\155\x61\x74\145\x64\40\103\x6f\x73\164", PR__MOD__STRUCTURED_DATA))->escqqisecooswqgo()->oiwawawcmigageco(6))->mkksewyosgeumwsa(Setting::ckuwucygcwsiawms(self::acokgesogaukygye, __("\103\165\162\162\x65\156\143\171", PR__MOD__STRUCTURED_DATA), ["\125\123\104" => __("\x55\x53\101\40\104\157\154\x6c\141\x72", PR__MOD__STRUCTURED_DATA), "\x49\122\x52" => __("\x49\x52\111\40\x52\151\x61\154", PR__MOD__STRUCTURED_DATA)])->oiwawawcmigageco(6))->mkksewyosgeumwsa(Setting::uouyygwcgsmygaee(self::skcomskcaowwkycu, __("\104\145\x73\143\162\x69\160\164\151\x6f\156", PR__MOD__STRUCTURED_DATA))->qigsyyqgewgskemg("\x77\x2d\155\x64\x2d\61\x30\x30"))->mkksewyosgeumwsa(Setting::iseogkiymousogom(self::aiuciaomueaooauq, __("\x53\x75\160\160\x6c\x69\145\x73", PR__MOD__STRUCTURED_DATA))->mkksewyosgeumwsa(Setting::ymuegqgyuagyucws(self::NAME, __("\x4e\x61\155\145", PR__MOD__STRUCTURED_DATA)))->oiwawawcmigageco(6))->mkksewyosgeumwsa(Setting::iseogkiymousogom(self::geiigmeyouakiawq, __("\x54\x6f\x6f\154\163", PR__MOD__STRUCTURED_DATA))->mkksewyosgeumwsa(Setting::ymuegqgyuagyucws(self::NAME, __("\x4e\141\x6d\145", PR__MOD__STRUCTURED_DATA)))->oiwawawcmigageco(6))->mkksewyosgeumwsa(Setting::iseogkiymousogom(self::ckyksesoyeugoiyw, __("\123\164\145\160\163", PR__MOD__STRUCTURED_DATA))->mkksewyosgeumwsa(Setting::ymuegqgyuagyucws(self::qescuiwgsyuikume, __("\x54\151\164\154\145", PR__MOD__STRUCTURED_DATA)))->mkksewyosgeumwsa(Setting::uouyygwcgsmygaee(self::gaaismkuoysggwye, __("\111\x6e\163\164\162\x75\x63\x74\151\157\156\x73", PR__MOD__STRUCTURED_DATA))->qigsyyqgewgskemg("\x77\x2d\x6d\x64\x2d\61\60\x30"))->mkksewyosgeumwsa(Setting::kimoeccokowuaiic(self::mkousmkiawwousws, __("\111\x6d\x61\x67\145", PR__MOD__STRUCTURED_DATA)))->ccmwycqioaicegoc(__("\120\165\x74\40\x65\141\143\x68\x20\144\151\x72\x65\143\x74\151\x6f\x6e\x20\x6f\x72\x20\164\x69\x70\40\141\x74\40\x73\145\160\x61\x72\141\x74\145\40\x6c\151\156\x65\x73\x2e", PR__MOD__STRUCTURED_DATA) . sprintf("\x3c\x62\162\x3e\40\45\x73", __("\102\x65\147\151\156\x20\x74\151\x70\x20\154\x69\156\145\163\40\x77\x69\x74\x68\40\141\40\x23\40\x63\150\141\162\141\143\164\x65\162\56", PR__MOD__STRUCTURED_DATA)))->usosgsaaimqcysyk())->saemoowcasogykak(IconFontawesomeInterface::ugyyeggewemawase); return parent::aoukuouwimcigeqe($ywoucyskcquysiwc); } public function ywayygsauoeyiasi(?string $cmwygeyygwqaemaq, $kuuiuigeacouwmaa = 1) { return new Instruction($cmwygeyygwqaemaq, $kuuiuigeacouwmaa); } public function yccawocmoqqoscuq(?string $cqgoimumaewouews, ?string $iyqygqimawuycsyq) { switch ($iyqygqimawuycsyq) { case "\x70\x74\x25\163\150": $aqykuigiuwmmcieu = __("\45\x73\40\x48\157\165\162\163", PR__MOD__STRUCTURED_DATA); goto ucuoeymyqeokgsya; case "\160\45\x73\144": $aqykuigiuwmmcieu = __("\x25\163\40\x44\141\171\x73", PR__MOD__STRUCTURED_DATA); goto ucuoeymyqeokgsya; case "\160\164\x25\163\155": default: $aqykuigiuwmmcieu = __("\x25\163\40\115\x69\156\x75\x74\x65\163", PR__MOD__STRUCTURED_DATA); goto ucuoeymyqeokgsya; } yuuyikiacmmueosu: ucuoeymyqeokgsya: return $this->wusgwkaycokeckqs(sprintf($aqykuigiuwmmcieu, $cqgoimumaewouews)); } }