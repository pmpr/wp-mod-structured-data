<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66a2f4651a433             |
    |_______________________________________|
*/
 namespace Pmpr\Module\StructuredData\Schema\CreativeWork; use Pmpr\Module\StructuredData\Schema\CreativeWork\Article\SocialMediaPosting\BlogPosting; use Pmpr\Module\StructuredData\Schema\Intangible\ItemList\BreadcrumbList; class Blog extends CreativeWork { protected $breadcrumb; protected $blogPost = []; protected ?string $issn = null; public function __construct($goiqeyeaqmicqiky = true) { if (!$goiqeyeaqmicqiky) { goto mggeqkcksyaymcsa; } $oikyogsosqcyueay = $this->caokeucsksukesyo()->kyqakacqeumicgag()->cykwscocqwykiocm(); $this->eyqkogeiqauioamw($this->ycqquoiyyuesegsy())->mqqgwegyyqkgoqeg($this->iyssgoiwgwygeacg())->gucwmccyimoagwcm(get_bloginfo(self::eqkeooqcsscoggia))->kkqwmgsyqkqyqgge($this->weymkusmeageugsu($oikyogsosqcyueay))->akcmoueugeecmoqm($this->osswsoymmgisqmoy($oikyogsosqcyueay)); mggeqkcksyaymcsa: parent::__construct($goiqeyeaqmicqiky); } private function iyssgoiwgwygeacg() { $kwyammwkyeoumeqi = []; cgyakcqgugqgkqiw: if (!have_posts()) { goto uegouoiuyoqkcscg; } the_post(); $kwyammwkyeoumeqi[] = new BlogPosting($this->caokeucsksukesyo()->ayueggmoqeeukqmq()->get()); goto cgyakcqgugqgkqiw; uegouoiuyoqkcscg: return $kwyammwkyeoumeqi; } public function csysgcguqaaisskm() : BlogPosting { return $this->blogPost; } public function mqqgwegyyqkgoqeg($kwyammwkyeoumeqi) : Blog { $this->blogPost = $kwyammwkyeoumeqi; return $this; } public function wwuogamoqmacsiqm(BlogPosting $aqsswsusswoyqakg) : Blog { $this->blogPost[] = $aqsswsusswoyqakg; return $this; } public function yyacwcaacimsoyyw() : ?string { return $this->issn; } public function eqqgkcgsewmucmku(?string $gmekmommwsucqkqa) : Blog { $this->issn = $gmekmommwsucqkqa; return $this; } }
