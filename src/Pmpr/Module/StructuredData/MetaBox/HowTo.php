<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             660dc1d9314a3             |
    |_______________________________________|
*/
 namespace Pmpr\Module\StructuredData\MetaBox; use Pmpr\Common\Foundation\Convert\Type\ConvertArray; use Pmpr\Common\Foundation\Manipulate\Post\ManipulatePost; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateNumber; use Pmpr\Common\Foundation\Interfaces\IconInterface; use Pmpr\Module\StructuredData\DataType\Instruction; use Pmpr\Module\StructuredData\Setting\Setting; class HowTo extends Tab { const uqgisaggcgmekkog = "\150\x6f\167\x74\157\x5f"; const geiigmeyouakiawq = self::uqgisaggcgmekkog . "\x74\x6f\157\154\163"; const ckyksesoyeugoiyw = self::uqgisaggcgmekkog . "\x73\164\145\x70\163"; const aiuciaomueaooauq = self::uqgisaggcgmekkog . "\163\165\160\x70\x6c\151\x65\x73"; const qyieuqcescsakwga = self::uqgisaggcgmekkog . "\x74\157\x74\141\x6c\x5f\164\151\x6d\x65"; const gaaismkuoysggwye = "\151\x6e\x73\x74\162\x75\143\x74\x69\x6f\x6e\163"; const iycyqgwoeeoioami = self::uqgisaggcgmekkog . "\x74\x6f\x74\141\154\137\x74\151\155\145\137\165\156\x69\164"; const skcomskcaowwkycu = self::uqgisaggcgmekkog . "\x64\145\163\x63\162\151\x70\164\x69\157\156"; const qqyqkusqcmeqssck = self::uqgisaggcgmekkog . "\x65\x73\x74\x69\x6d\x61\x74\x65\144\x5f\x76\141\154\x75\x65"; const acokgesogaukygye = self::uqgisaggcgmekkog . "\x65\x73\x74\151\x6d\x61\164\x65\144\x5f\x63\x75\162\x72\145\x6e\x63\x79"; public function eweuqkioyiiiqgcw($post) { $omauuckqmiemgegq = $this->seyyiqmgwymyumoq($post); if (!$omauuckqmiemgegq) { goto qiiigwkqeoewsuwm; } $imeywacwecgemcco = ManipulateArray::get($omauuckqmiemgegq, "\x63\x6f\x73\164"); $wwigiesyquoeawog = ManipulateArray::get($omauuckqmiemgegq, "\x63\165\x72\162\x65\x6e\x63\x79"); if (!($imeywacwecgemcco && $wwigiesyquoeawog)) { goto esikeyqyuikmaiek; } $imeywacwecgemcco = $this->wusgwkaycokeckqs(ManipulateNumber::uwwmyomsqkoaqawa($imeywacwecgemcco)); $wwigiesyquoeawog = $wwigiesyquoeawog == "\125\x53\x44" ? __("\104\157\x6c\154\141\x72", PR__MDL__STRUCTURED_DATA) : __("\x52\151\x61\154", PR__MDL__STRUCTURED_DATA); $omauuckqmiemgegq->cost = "{$imeywacwecgemcco}\40{$wwigiesyquoeawog}"; esikeyqyuikmaiek: $cqgoimumaewouews = ManipulateArray::get($omauuckqmiemgegq, "\164\x69\x6d\x65"); $iyqygqimawuycsyq = ManipulateArray::get($omauuckqmiemgegq, "\165\156\x69\164"); if (!($cqgoimumaewouews && $iyqygqimawuycsyq)) { goto okkmcocqokkskasy; } $omauuckqmiemgegq->time = $this->yccawocmoqqoscuq($cqgoimumaewouews, $iyqygqimawuycsyq); okkmcocqokkskasy: echo $this->iuygowkemiiwqmiw("\x63\x61\x72\144", ["\x68\157\x77\x74\157" => $omauuckqmiemgegq, "\164\151\164\154\x65" => __("\x48\157\167\x20\x54\157\x20\104\x4f", PR__MDL__STRUCTURED_DATA), "\143\x6f\x73\x74\137\164\x69\164\x6c\145" => __("\103\157\x73\x74", PR__MDL__STRUCTURED_DATA), "\x74\151\155\x65\x5f\x74\x69\164\154\145" => __("\x54\x6f\164\x61\x6c\x20\124\x69\x6d\x65", PR__MDL__STRUCTURED_DATA), "\163\164\145\x70\163\137\164\151\164\x6c\x65" => __("\x53\164\x65\160\x73", PR__MDL__STRUCTURED_DATA), "\x74\x6f\157\154\163\x5f\x74\151\164\x6c\145" => __("\124\x6f\x6f\154\x73", PR__MDL__STRUCTURED_DATA), "\x73\165\160\x70\154\x69\x65\163\137\x74\151\x74\x6c\145" => __("\x53\x75\x70\x70\154\x69\x65\x73", PR__MDL__STRUCTURED_DATA), "\x73\x74\x65\x70\137\164\151\x74\x6c\145\x5f\x6d\x61\163\x6b" => __("\x53\x74\x65\x70\x20\45\163\x3a\x20\x25\163", PR__MDL__STRUCTURED_DATA)]); qiiigwkqeoewsuwm: parent::eweuqkioyiiiqgcw($post); } public function seyyiqmgwymyumoq($post = null) { $icwicymcioeyeyek = parent::seyyiqmgwymyumoq($post); if ($icwicymcioeyeyek) { goto aiccyaswigkaycqk; } $post = ManipulatePost::get($post); if (!$post) { goto usymasgsyqgsuocg; } $sieqmaaeyogyamwk = $cqgoimumaewouews = ManipulatePost::igawqaomowicuayw(self::qyieuqcescsakwga, $post); $wowwosiimcqeokuo = ManipulatePost::igawqaomowicuayw(self::iycyqgwoeeoioami, $post); if (!($cqgoimumaewouews && $wowwosiimcqeokuo)) { goto esaqcqqwuussiiwo; } $sieqmaaeyogyamwk = sprintf($wowwosiimcqeokuo, $cqgoimumaewouews); esaqcqqwuussiiwo: $asuggasaseaacmqu = ConvertArray::wauqeqkcymgoceuy(ManipulatePost::igawqaomowicuayw(self::ckyksesoyeugoiyw, $post)); if (!$asuggasaseaacmqu) { goto eucqomyqykgoiuge; } foreach ($asuggasaseaacmqu as $wyeyeaaekyoyimqu) { $mieuwqqskaueukye = ManipulateArray::get($wyeyeaaekyoyimqu, self::gaaismkuoysggwye, []); if (!$mieuwqqskaueukye) { goto qikaewekoecykeou; } $mieuwqqskaueukye = preg_split("\x2f\134\162\x5c\156\174\x5c\x6e\x7c\x5c\162\57", $mieuwqqskaueukye); if (!($mieuwqqskaueukye && is_array($mieuwqqskaueukye))) { goto yqagomygmeoecwey; } $mieuwqqskaueukye = array_filter($mieuwqqskaueukye); foreach ($mieuwqqskaueukye as $momcykaoccoymeig => $imiasuqakwyyyemq) { if (!rtrim($imiasuqakwyyyemq)) { goto gsygwgsiawgmqiyi; } $igqsaukqcqscimok = $this->ywayygsauoeyiasi($imiasuqakwyyyemq, $momcykaoccoymeig + 1); $mieuwqqskaueukye[$momcykaoccoymeig] = $igqsaukqcqscimok; gsygwgsiawgmqiyi: wwukgaquuyoissgy: } suqcsgaosywaauuu: $mcqieaigyeeyaksm = ManipulateArray::get($wyeyeaaekyoyimqu, self::mkousmkiawwousws . self::mswocgcucqoaesaa); if ($mcqieaigyeeyaksm) { goto qsgqwyqaqiowkmco; } $wyeyeaaekyoyimqu->{self::mkousmkiawwousws . self::mswocgcucqoaesaa} = Setting::ygyiswukccscuqmm(); qsgqwyqaqiowkmco: $wyeyeaaekyoyimqu->{self::gaaismkuoysggwye} = $mieuwqqskaueukye; yqagomygmeoecwey: qikaewekoecykeou: mscgewkcqcoowweg: } ikqeeaysmqgcgawq: $icwicymcioeyeyek = ["\x63\157\163\164" => ManipulatePost::igawqaomowicuayw(self::qqyqkusqcmeqssck, $post), "\164\151\x6d\x65" => $cqgoimumaewouews, "\165\156\x69\x74" => $wowwosiimcqeokuo, "\164\157\157\x6c\x73" => ConvertArray::wauqeqkcymgoceuy(ManipulatePost::igawqaomowicuayw(self::geiigmeyouakiawq, $post)), "\x73\x74\x65\x70\163" => $asuggasaseaacmqu, "\x74\x69\x74\154\x65" => ManipulatePost::qcgakseyaikigqco($post), "\151\155\141\147\145" => ManipulatePost::wsiiswmaagmyiaiw($post), "\163\x75\x70\160\154\x69\145\x73" => ConvertArray::wauqeqkcymgoceuy(ManipulatePost::igawqaomowicuayw(self::aiuciaomueaooauq, $post)), "\143\x75\x72\x72\145\x6e\x63\171" => ManipulatePost::igawqaomowicuayw(self::acokgesogaukygye, $post), "\x74\157\164\x61\x6c\124\151\x6d\x65" => $sieqmaaeyogyamwk, "\144\145\163\x63\162\151\160\164\x69\157\x6e" => ManipulatePost::igawqaomowicuayw(self::skcomskcaowwkycu, $post)]; $icwicymcioeyeyek = ConvertArray::kamisyecckmwywwo($icwicymcioeyeyek); eucqomyqykgoiuge: usymasgsyqgsuocg: aiccyaswigkaycqk: return $icwicymcioeyeyek; } public function aoukuouwimcigeqe($ywoucyskcquysiwc = []) { $ywoucyskcquysiwc[] = Setting::sgsmqaoowiyocqaa("\150\157\x77\164\157\x5f\x74\x61\142", __("\x48\x4f\127\x2d\x54\117", PR__MDL__STRUCTURED_DATA))->mkksewyosgeumwsa(Setting::ymuegqgyuagyucws(self::qyieuqcescsakwga, __("\x54\157\x74\x61\x6c\40\124\x69\155\x65", PR__MDL__STRUCTURED_DATA))->escqqisecooswqgo()->oiwawawcmigageco(6))->mkksewyosgeumwsa(Setting::ckuwucygcwsiawms(self::iycyqgwoeeoioami, __("\x54\157\x74\141\x6c\40\x54\x69\x6d\x65\40\x55\156\151\x74", PR__MDL__STRUCTURED_DATA), ["\x70\x74\x25\163\155" => __("\115\151\156\165\x74\x65", PR__MDL__STRUCTURED_DATA), "\160\x74\45\x73\x68" => __("\x48\x6f\165\x72", PR__MDL__STRUCTURED_DATA), "\x70\45\163\144" => __("\104\x61\171", PR__MDL__STRUCTURED_DATA)])->oiwawawcmigageco(6))->mkksewyosgeumwsa(Setting::ymuegqgyuagyucws(self::qqyqkusqcmeqssck, __("\x45\x73\164\151\155\x61\x74\x65\144\x20\x43\x6f\163\164", PR__MDL__STRUCTURED_DATA))->escqqisecooswqgo()->oiwawawcmigageco(6))->mkksewyosgeumwsa(Setting::ckuwucygcwsiawms(self::acokgesogaukygye, __("\103\165\x72\162\x65\x6e\x63\171", PR__MDL__STRUCTURED_DATA), ["\x55\123\104" => __("\125\x53\101\x20\104\157\154\154\x61\162", PR__MDL__STRUCTURED_DATA), "\111\x52\x52" => __("\x49\x52\111\x20\122\151\x61\154", PR__MDL__STRUCTURED_DATA)])->oiwawawcmigageco(6))->mkksewyosgeumwsa(Setting::uouyygwcgsmygaee(self::skcomskcaowwkycu, __("\104\145\x73\x63\x72\151\x70\164\151\x6f\x6e", PR__MDL__STRUCTURED_DATA))->qigsyyqgewgskemg("\x77\x2d\x6d\144\55\x31\x30\60"))->mkksewyosgeumwsa(Setting::iseogkiymousogom(self::aiuciaomueaooauq, __("\x53\x75\x70\x70\154\151\x65\163", PR__MDL__STRUCTURED_DATA))->mkksewyosgeumwsa(Setting::ymuegqgyuagyucws(self::NAME, __("\x4e\141\155\x65", PR__MDL__STRUCTURED_DATA)))->oiwawawcmigageco(6))->mkksewyosgeumwsa(Setting::iseogkiymousogom(self::geiigmeyouakiawq, __("\x54\157\157\154\x73", PR__MDL__STRUCTURED_DATA))->mkksewyosgeumwsa(Setting::ymuegqgyuagyucws(self::NAME, __("\x4e\141\155\145", PR__MDL__STRUCTURED_DATA)))->oiwawawcmigageco(6))->mkksewyosgeumwsa(Setting::iseogkiymousogom(self::ckyksesoyeugoiyw, __("\123\x74\145\160\x73", PR__MDL__STRUCTURED_DATA))->mkksewyosgeumwsa(Setting::ymuegqgyuagyucws(self::qescuiwgsyuikume, __("\124\x69\164\154\x65", PR__MDL__STRUCTURED_DATA)))->mkksewyosgeumwsa(Setting::uouyygwcgsmygaee(self::gaaismkuoysggwye, __("\x49\x6e\x73\164\162\x75\x63\x74\151\157\156\163", PR__MDL__STRUCTURED_DATA))->qigsyyqgewgskemg("\167\55\x6d\144\x2d\x31\60\x30"))->mkksewyosgeumwsa(Setting::kimoeccokowuaiic(self::mkousmkiawwousws, __("\111\x6d\141\147\145", PR__MDL__STRUCTURED_DATA)))->ccmwycqioaicegoc(__("\x50\x75\164\40\145\141\x63\150\40\144\x69\162\145\x63\164\151\157\x6e\40\x6f\162\x20\x74\151\160\40\x61\x74\40\x73\x65\160\x61\162\x61\x74\x65\40\154\151\x6e\x65\x73\x2e", PR__MDL__STRUCTURED_DATA) . sprintf("\74\142\162\76\40\45\163", __("\x42\145\x67\151\x6e\x20\164\x69\160\40\x6c\151\x6e\145\x73\40\167\151\x74\x68\40\141\x20\x23\x20\143\x68\x61\x72\x61\143\164\x65\x72\x2e", PR__MDL__STRUCTURED_DATA)))->usosgsaaimqcysyk())->saemoowcasogykak(IconInterface::sogokmmgmqesmyum); return parent::aoukuouwimcigeqe($ywoucyskcquysiwc); } public function ywayygsauoeyiasi(?string $cmwygeyygwqaemaq, $kuuiuigeacouwmaa = 1) { return new Instruction($cmwygeyygwqaemaq, $kuuiuigeacouwmaa); } public function yccawocmoqqoscuq(?string $cqgoimumaewouews, ?string $iyqygqimawuycsyq) { switch ($iyqygqimawuycsyq) { case "\160\x74\45\163\150": $aqykuigiuwmmcieu = __("\45\163\x20\x48\x6f\165\162\x73", PR__MDL__STRUCTURED_DATA); goto sqyokemumceysegy; case "\160\45\x73\x64": $aqykuigiuwmmcieu = __("\45\x73\40\104\141\x79\163", PR__MDL__STRUCTURED_DATA); goto sqyokemumceysegy; case "\x70\164\45\163\155": default: $aqykuigiuwmmcieu = __("\x25\163\x20\115\151\x6e\x75\x74\145\163", PR__MDL__STRUCTURED_DATA); goto sqyokemumceysegy; } oqousikwiiqagoyw: sqyokemumceysegy: return $this->wusgwkaycokeckqs(sprintf($aqykuigiuwmmcieu, $cqgoimumaewouews)); } }
