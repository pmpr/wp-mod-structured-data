<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6646a8c61c7c0             |
    |_______________________________________|
*/
 namespace Pmpr\Module\StructuredData\MetaBox; use Pmpr\Common\Foundation\Convert\Type\ConvertArray; use Pmpr\Common\Foundation\Manipulate\Post\ManipulatePost; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateNumber; use Pmpr\Common\Foundation\Interfaces\IconInterface; use Pmpr\Module\StructuredData\DataType\Instruction; use Pmpr\Module\StructuredData\Setting\Setting; class HowTo extends Tab { const uqgisaggcgmekkog = "\x68\x6f\167\x74\157\x5f"; const geiigmeyouakiawq = self::uqgisaggcgmekkog . "\x74\157\x6f\x6c\x73"; const ckyksesoyeugoiyw = self::uqgisaggcgmekkog . "\163\x74\x65\x70\163"; const aiuciaomueaooauq = self::uqgisaggcgmekkog . "\163\165\160\160\x6c\151\145\163"; const qyieuqcescsakwga = self::uqgisaggcgmekkog . "\x74\157\x74\141\154\137\164\151\155\x65"; const gaaismkuoysggwye = "\x69\x6e\163\x74\162\165\x63\164\151\x6f\156\163"; const iycyqgwoeeoioami = self::uqgisaggcgmekkog . "\164\157\164\x61\154\x5f\164\x69\155\x65\137\x75\156\x69\164"; const skcomskcaowwkycu = self::uqgisaggcgmekkog . "\144\145\163\143\162\151\160\x74\x69\157\156"; const qqyqkusqcmeqssck = self::uqgisaggcgmekkog . "\x65\x73\164\x69\x6d\141\164\x65\x64\x5f\166\x61\154\165\x65"; const acokgesogaukygye = self::uqgisaggcgmekkog . "\x65\163\x74\x69\155\141\164\145\144\x5f\143\165\162\x72\145\156\x63\171"; public function eweuqkioyiiiqgcw($post) { $omauuckqmiemgegq = $this->seyyiqmgwymyumoq($post); if (!$omauuckqmiemgegq) { goto qmeoaqmsuseueqiy; } $imeywacwecgemcco = ManipulateArray::get($omauuckqmiemgegq, "\143\157\163\x74"); $wwigiesyquoeawog = ManipulateArray::get($omauuckqmiemgegq, "\x63\165\x72\162\x65\x6e\143\x79"); if (!($imeywacwecgemcco && $wwigiesyquoeawog)) { goto eiawsoasmscmqswa; } $imeywacwecgemcco = $this->wusgwkaycokeckqs(ManipulateNumber::uwwmyomsqkoaqawa($imeywacwecgemcco)); $wwigiesyquoeawog = $wwigiesyquoeawog == "\125\123\104" ? __("\104\x6f\154\154\141\162", PR__MDL__STRUCTURED_DATA) : __("\x52\x69\x61\154", PR__MDL__STRUCTURED_DATA); $omauuckqmiemgegq->cost = "{$imeywacwecgemcco}\x20{$wwigiesyquoeawog}"; eiawsoasmscmqswa: $cqgoimumaewouews = ManipulateArray::get($omauuckqmiemgegq, "\164\151\155\x65"); $iyqygqimawuycsyq = ManipulateArray::get($omauuckqmiemgegq, "\x75\156\x69\x74"); if (!($cqgoimumaewouews && $iyqygqimawuycsyq)) { goto ickcmqoiosquugwe; } $omauuckqmiemgegq->time = $this->yccawocmoqqoscuq($cqgoimumaewouews, $iyqygqimawuycsyq); ickcmqoiosquugwe: echo $this->iuygowkemiiwqmiw("\143\x61\x72\144", ["\150\157\167\164\157" => $omauuckqmiemgegq, "\x74\x69\164\154\x65" => __("\110\157\x77\x20\124\157\40\104\x4f", PR__MDL__STRUCTURED_DATA), "\x63\x6f\163\x74\137\164\x69\164\x6c\145" => __("\x43\157\163\x74", PR__MDL__STRUCTURED_DATA), "\x74\151\155\x65\137\x74\x69\164\x6c\145" => __("\x54\157\164\141\154\40\x54\151\155\x65", PR__MDL__STRUCTURED_DATA), "\163\164\x65\160\x73\137\x74\151\164\154\145" => __("\x53\x74\x65\x70\163", PR__MDL__STRUCTURED_DATA), "\164\157\157\x6c\163\x5f\164\x69\164\x6c\x65" => __("\x54\x6f\x6f\x6c\163", PR__MDL__STRUCTURED_DATA), "\x73\x75\x70\160\154\x69\145\x73\137\x74\x69\x74\x6c\x65" => __("\123\165\x70\160\154\x69\x65\163", PR__MDL__STRUCTURED_DATA), "\x73\164\145\160\137\164\x69\x74\154\x65\x5f\x6d\x61\x73\153" => __("\x53\x74\x65\x70\40\x25\163\72\x20\x25\163", PR__MDL__STRUCTURED_DATA)]); qmeoaqmsuseueqiy: parent::eweuqkioyiiiqgcw($post); } public function seyyiqmgwymyumoq($post = null) { $icwicymcioeyeyek = parent::seyyiqmgwymyumoq($post); if ($icwicymcioeyeyek) { goto yssscwioiyygssec; } $post = ManipulatePost::get($post); if (!$post) { goto qcessicwuikwqsis; } $sieqmaaeyogyamwk = $cqgoimumaewouews = ManipulatePost::igawqaomowicuayw(self::qyieuqcescsakwga, $post); $wowwosiimcqeokuo = ManipulatePost::igawqaomowicuayw(self::iycyqgwoeeoioami, $post); if (!($cqgoimumaewouews && $wowwosiimcqeokuo)) { goto ygkcacsyyckescqs; } $sieqmaaeyogyamwk = sprintf($wowwosiimcqeokuo, $cqgoimumaewouews); ygkcacsyyckescqs: $asuggasaseaacmqu = ConvertArray::wauqeqkcymgoceuy(ManipulatePost::igawqaomowicuayw(self::ckyksesoyeugoiyw, $post)); if (!$asuggasaseaacmqu) { goto qwcegcuowwgiccos; } foreach ($asuggasaseaacmqu as $wyeyeaaekyoyimqu) { $mieuwqqskaueukye = ManipulateArray::get($wyeyeaaekyoyimqu, self::gaaismkuoysggwye, []); if (!$mieuwqqskaueukye) { goto kooskuwkuayiuose; } $mieuwqqskaueukye = preg_split("\57\134\x72\134\x6e\x7c\134\156\x7c\134\x72\x2f", $mieuwqqskaueukye); if (!($mieuwqqskaueukye && is_array($mieuwqqskaueukye))) { goto twkmiuomimomscew; } $mieuwqqskaueukye = array_filter($mieuwqqskaueukye); foreach ($mieuwqqskaueukye as $momcykaoccoymeig => $imiasuqakwyyyemq) { if (!rtrim($imiasuqakwyyyemq)) { goto mqccmesakuemceqi; } $igqsaukqcqscimok = $this->ywayygsauoeyiasi($imiasuqakwyyyemq, $momcykaoccoymeig + 1); $mieuwqqskaueukye[$momcykaoccoymeig] = $igqsaukqcqscimok; mqccmesakuemceqi: igymseewwyiocoug: } sukskmcwsoysiuqu: $mcqieaigyeeyaksm = ManipulateArray::get($wyeyeaaekyoyimqu, self::mkousmkiawwousws . self::mswocgcucqoaesaa); if ($mcqieaigyeeyaksm) { goto eyiamcekkgkiawqy; } $wyeyeaaekyoyimqu->{self::mkousmkiawwousws . self::mswocgcucqoaesaa} = Setting::ygyiswukccscuqmm(); eyiamcekkgkiawqy: $wyeyeaaekyoyimqu->{self::gaaismkuoysggwye} = $mieuwqqskaueukye; twkmiuomimomscew: kooskuwkuayiuose: cgewcsueoyaeikgm: } cuoqqgaygogsmmic: $icwicymcioeyeyek = ["\143\157\x73\x74" => ManipulatePost::igawqaomowicuayw(self::qqyqkusqcmeqssck, $post), "\x74\x69\155\x65" => $cqgoimumaewouews, "\165\156\151\x74" => $wowwosiimcqeokuo, "\x74\157\157\154\x73" => ConvertArray::wauqeqkcymgoceuy(ManipulatePost::igawqaomowicuayw(self::geiigmeyouakiawq, $post)), "\x73\164\145\x70\163" => $asuggasaseaacmqu, "\x74\x69\x74\154\145" => ManipulatePost::qcgakseyaikigqco($post), "\151\155\x61\x67\145" => ManipulatePost::wsiiswmaagmyiaiw($post), "\163\x75\160\160\154\151\x65\x73" => ConvertArray::wauqeqkcymgoceuy(ManipulatePost::igawqaomowicuayw(self::aiuciaomueaooauq, $post)), "\143\x75\162\x72\145\156\x63\171" => ManipulatePost::igawqaomowicuayw(self::acokgesogaukygye, $post), "\x74\x6f\x74\141\154\x54\151\x6d\x65" => $sieqmaaeyogyamwk, "\144\x65\x73\143\162\151\x70\164\x69\157\x6e" => ManipulatePost::igawqaomowicuayw(self::skcomskcaowwkycu, $post)]; $icwicymcioeyeyek = ConvertArray::kamisyecckmwywwo($icwicymcioeyeyek); qwcegcuowwgiccos: qcessicwuikwqsis: yssscwioiyygssec: return $icwicymcioeyeyek; } public function aoukuouwimcigeqe($ywoucyskcquysiwc = []) { $ywoucyskcquysiwc[] = Setting::sgsmqaoowiyocqaa("\x68\x6f\x77\164\x6f\137\164\141\x62", __("\x48\117\127\55\124\117", PR__MDL__STRUCTURED_DATA))->mkksewyosgeumwsa(Setting::ymuegqgyuagyucws(self::qyieuqcescsakwga, __("\x54\157\164\x61\154\40\x54\151\155\145", PR__MDL__STRUCTURED_DATA))->escqqisecooswqgo()->oiwawawcmigageco(6))->mkksewyosgeumwsa(Setting::ckuwucygcwsiawms(self::iycyqgwoeeoioami, __("\124\x6f\x74\x61\x6c\x20\x54\x69\155\145\x20\125\x6e\x69\164", PR__MDL__STRUCTURED_DATA), ["\x70\x74\45\x73\x6d" => __("\115\151\x6e\x75\164\x65", PR__MDL__STRUCTURED_DATA), "\160\164\x25\163\150" => __("\110\x6f\x75\162", PR__MDL__STRUCTURED_DATA), "\160\x25\163\144" => __("\104\x61\x79", PR__MDL__STRUCTURED_DATA)])->oiwawawcmigageco(6))->mkksewyosgeumwsa(Setting::ymuegqgyuagyucws(self::qqyqkusqcmeqssck, __("\105\x73\164\x69\x6d\x61\x74\x65\144\x20\x43\x6f\x73\x74", PR__MDL__STRUCTURED_DATA))->escqqisecooswqgo()->oiwawawcmigageco(6))->mkksewyosgeumwsa(Setting::ckuwucygcwsiawms(self::acokgesogaukygye, __("\x43\165\x72\x72\x65\x6e\x63\x79", PR__MDL__STRUCTURED_DATA), ["\x55\123\104" => __("\x55\123\x41\40\104\x6f\154\154\x61\162", PR__MDL__STRUCTURED_DATA), "\111\x52\122" => __("\x49\122\x49\40\x52\151\141\154", PR__MDL__STRUCTURED_DATA)])->oiwawawcmigageco(6))->mkksewyosgeumwsa(Setting::uouyygwcgsmygaee(self::skcomskcaowwkycu, __("\x44\145\163\143\x72\151\x70\x74\x69\157\156", PR__MDL__STRUCTURED_DATA))->qigsyyqgewgskemg("\167\x2d\155\x64\55\61\x30\x30"))->mkksewyosgeumwsa(Setting::iseogkiymousogom(self::aiuciaomueaooauq, __("\123\x75\x70\x70\x6c\151\x65\163", PR__MDL__STRUCTURED_DATA))->mkksewyosgeumwsa(Setting::ymuegqgyuagyucws(self::NAME, __("\116\141\x6d\x65", PR__MDL__STRUCTURED_DATA)))->oiwawawcmigageco(6))->mkksewyosgeumwsa(Setting::iseogkiymousogom(self::geiigmeyouakiawq, __("\x54\157\157\x6c\x73", PR__MDL__STRUCTURED_DATA))->mkksewyosgeumwsa(Setting::ymuegqgyuagyucws(self::NAME, __("\x4e\x61\x6d\x65", PR__MDL__STRUCTURED_DATA)))->oiwawawcmigageco(6))->mkksewyosgeumwsa(Setting::iseogkiymousogom(self::ckyksesoyeugoiyw, __("\123\164\145\160\163", PR__MDL__STRUCTURED_DATA))->mkksewyosgeumwsa(Setting::ymuegqgyuagyucws(self::qescuiwgsyuikume, __("\124\x69\164\x6c\x65", PR__MDL__STRUCTURED_DATA)))->mkksewyosgeumwsa(Setting::uouyygwcgsmygaee(self::gaaismkuoysggwye, __("\111\x6e\163\164\x72\165\x63\x74\151\x6f\x6e\163", PR__MDL__STRUCTURED_DATA))->qigsyyqgewgskemg("\167\x2d\x6d\x64\55\61\60\60"))->mkksewyosgeumwsa(Setting::kimoeccokowuaiic(self::mkousmkiawwousws, __("\x49\155\141\x67\145", PR__MDL__STRUCTURED_DATA)))->ccmwycqioaicegoc(__("\120\x75\164\x20\145\141\143\x68\x20\x64\151\x72\x65\143\x74\151\x6f\x6e\x20\157\x72\x20\x74\x69\160\x20\141\x74\x20\163\x65\160\141\x72\141\x74\145\40\x6c\x69\156\145\163\x2e", PR__MDL__STRUCTURED_DATA) . sprintf("\74\x62\x72\x3e\x20\x25\163", __("\102\145\147\151\156\40\164\x69\x70\x20\154\x69\x6e\145\x73\40\167\x69\x74\x68\x20\x61\x20\43\40\143\x68\141\x72\141\143\x74\x65\x72\x2e", PR__MDL__STRUCTURED_DATA)))->usosgsaaimqcysyk())->saemoowcasogykak(IconInterface::sogokmmgmqesmyum); return parent::aoukuouwimcigeqe($ywoucyskcquysiwc); } public function ywayygsauoeyiasi(?string $cmwygeyygwqaemaq, $kuuiuigeacouwmaa = 1) { return new Instruction($cmwygeyygwqaemaq, $kuuiuigeacouwmaa); } public function yccawocmoqqoscuq(?string $cqgoimumaewouews, ?string $iyqygqimawuycsyq) { switch ($iyqygqimawuycsyq) { case "\160\164\x25\163\x68": $aqykuigiuwmmcieu = __("\x25\x73\x20\x48\x6f\165\162\x73", PR__MDL__STRUCTURED_DATA); goto ieumumsgyguceusy; case "\x70\45\163\144": $aqykuigiuwmmcieu = __("\45\x73\40\104\141\x79\x73", PR__MDL__STRUCTURED_DATA); goto ieumumsgyguceusy; case "\160\164\45\163\x6d": default: $aqykuigiuwmmcieu = __("\45\x73\x20\115\151\x6e\x75\x74\145\x73", PR__MDL__STRUCTURED_DATA); goto ieumumsgyguceusy; } coywmiyqgsweuiic: ieumumsgyguceusy: return $this->wusgwkaycokeckqs(sprintf($aqykuigiuwmmcieu, $cqgoimumaewouews)); } }
