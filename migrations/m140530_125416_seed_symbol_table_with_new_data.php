<?php

use yii\db\Schema;
use yii\db\Query;

class m140530_125416_seed_symbol_table_with_new_data extends \yii\db\Migration
{
	private $seedData = [
		["Æ", "&AElig;", "&#x00C6;"],
		["Ά", "&Aacgr;", "&#x0386;"],
		["Á", "&Aacute;", "&#x00C1;"],
		["Ă", "&Abreve;", "&#x0102;"],
		["Â", "&Acirc;", "&#x00C2;"],
		["А", "&Acy;", "&#x0410;"],
		["Α", "&Agr;", "&#x0391;"],
		["À", "&Agrave;", "&#x00C0;"],
		["Α", "&Alpha;", "&#x0391;"],
		["Ā", "&Amacr;", "&#x0100;"],
		["Ą", "&Aogon;", "&#x0104;"],
		["Å", "&Aring;", "&#x00C5;"],
		["Ã", "&Atilde;", "&#x00C3;"],
		["Ä", "&Auml;", "&#x00C4;"],
		["⌆", "&Barwed;", "&#x2306;"],
		["Б", "&Bcy;", "&#x0411;"],
		["Β", "&Beta;", "&#x0392;"],
		["Β", "&Bgr;", "&#x0392;"],
		["Ч", "&CHcy;", "&#x0427;"],
		["Ć", "&Cacute;", "&#x0106;"],
		["⋒", "&Cap;", "&#x22D2;"],
		["Č", "&Ccaron;", "&#x010C;"],
		["Ç", "&Ccedil;", "&#x00C7;"],
		["Ĉ", "&Ccirc;", "&#x0108;"],
		["Ċ", "&Cdot;", "&#x010A;"],
		["Χ", "&Chi;", "&#x03A7;"],
		["⋓", "&Cup;", "&#x22D3;"],
		["Ђ", "&DJcy;", "&#x0402;"],
		["Ѕ", "&DScy;", "&#x0405;"],
		["Џ", "&DZcy;", "&#x040F;"],
		["‡", "&Dagger;", "&#x2021;"],
		["Ď", "&Dcaron;", "&#x010E;"],
		["Д", "&Dcy;", "&#x0414;"],
		["Δ", "&Delta;", "&#x0394;"],
		["Δ", "&Dgr;", "&#x0394;"],
		["¨", "&Dot;", "&#x00A8;"],
		["⃜", "&DotDot;", "&#x20DC;"],
		["Đ", "&Dstrok;", "&#x0110;"],
		["Ή", "&EEacgr;", "&#x0389;"],
		["Η", "&EEgr;", "&#x0397;"],
		["Ŋ", "&ENG;", "&#x014A;"],
		["Ð", "&ETH;", "&#x00D0;"],
		["Έ", "&Eacgr;", "&#x0388;"],
		["É", "&Eacute;", "&#x00C9;"],
		["Ě", "&Ecaron;", "&#x011A;"],
		["Ê", "&Ecirc;", "&#x00CA;"],
		["Э", "&Ecy;", "&#x042D;"],
		["Ė", "&Edot;", "&#x0116;"],
		["Ε", "&Egr;", "&#x0395;"],
		["È", "&Egrave;", "&#x00C8;"],
		["Ē", "&Emacr;", "&#x0112;"],
		["Ę", "&Eogon;", "&#x0118;"],
		["Ε", "&Epsilon;", "&#x0395;"],
		["Η", "&Eta;", "&#x0397;"],
		["Ë", "&Euml;", "&#x00CB;"],
		["Ф", "&Fcy;", "&#x0424;"],
		["Ѓ", "&GJcy;", "&#x0403;"],
		["Γ", "&Gamma;", "&#x0393;"],
		["Ğ", "&Gbreve;", "&#x011E;"],
		["Ģ", "&Gcedil;", "&#x0122;"],
		["Ĝ", "&Gcirc;", "&#x011C;"],
		["Г", "&Gcy;", "&#x0413;"],
		["Ġ", "&Gdot;", "&#x0120;"],
		["⋙", "&Gg;", "&#x22D9;"],
		["Γ", "&Ggr;", "&#x0393;"],
		["≫", "&Gt;", "&#x226B;"],
		["Ъ", "&HARDcy;", "&#x042A;"],
		["Ĥ", "&Hcirc;", "&#x0124;"],
		["Ħ", "&Hstrok;", "&#x0126;"],
		["Е", "&IEcy;", "&#x0415;"],
		["Ĳ", "&IJlig;", "&#x0132;"],
		["Ё", "&IOcy;", "&#x0401;"],
		["Ί", "&Iacgr;", "&#x038A;"],
		["Í", "&Iacute;", "&#x00CD;"],
		["Î", "&Icirc;", "&#x00CE;"],
		["И", "&Icy;", "&#x0418;"],
		["Ϊ", "&Idigr;", "&#x03AA;"],
		["İ", "&Idot;", "&#x0130;"],
		["Ι", "&Igr;", "&#x0399;"],
		["Ì", "&Igrave;", "&#x00CC;"],
		["Ī", "&Imacr;", "&#x012A;"],
		["Į", "&Iogon;", "&#x012E;"],
		["Ι", "&Iota;", "&#x0399;"],
		["Ĩ", "&Itilde;", "&#x0128;"],
		["І", "&Iukcy;", "&#x0406;"],
		["Ï", "&Iuml;", "&#x00CF;"],
		["Ĵ", "&Jcirc;", "&#x0134;"],
		["Й", "&Jcy;", "&#x0419;"],
		["Ј", "&Jsercy;", "&#x0408;"],
		["Є", "&Jukcy;", "&#x0404;"],
		["Х", "&KHcy;", "&#x0425;"],
		["Χ", "&KHgr;", "&#x03A7;"],
		["Ќ", "&KJcy;", "&#x040C;"],
		["Κ", "&Kappa;", "&#x039A;"],
		["Ķ", "&Kcedil;", "&#x0136;"],
		["К", "&Kcy;", "&#x041A;"],
		["Κ", "&Kgr;", "&#x039A;"],
		["Љ", "&LJcy;", "&#x0409;"],
		["Ĺ", "&Lacute;", "&#x0139;"],
		["Λ", "&Lambda;", "&#x039B;"],
		["↞", "&Larr;", "&#x219E;"],
		["Ľ", "&Lcaron;", "&#x013D;"],
		["Ļ", "&Lcedil;", "&#x013B;"],
		["Л", "&Lcy;", "&#x041B;"],
		["Λ", "&Lgr;", "&#x039B;"],
		["⋘", "&Ll;", "&#x22D8;"],
		["Ŀ", "&Lmidot;", "&#x013F;"],
		["Ł", "&Lstrok;", "&#x0141;"],
		["≪", "&Lt;", "&#x226A;"],
		["М", "&Mcy;", "&#x041C;"],
		["Μ", "&Mgr;", "&#x039C;"],
		["Μ", "&Mu;", "&#x039C;"],
		["Њ", "&NJcy;", "&#x040A;"],
		["Ń", "&Nacute;", "&#x0143;"],
		["Ň", "&Ncaron;", "&#x0147;"],
		["Ņ", "&Ncedil;", "&#x0145;"],
		["Н", "&Ncy;", "&#x041D;"],
		["Ν", "&Ngr;", "&#x039D;"],
		["Ñ", "&Ntilde;", "&#x00D1;"],
		["Ν", "&Nu;", "&#x039D;"],
		["Œ", "&OElig;", "&#x0152;"],
		["Ώ", "&OHacgr;", "&#x038F;"],
		["Ω", "&OHgr;", "&#x03A9;"],
		["Ό", "&Oacgr;", "&#x038C;"],
		["Ó", "&Oacute;", "&#x00D3;"],
		["Ô", "&Ocirc;", "&#x00D4;"],
		["О", "&Ocy;", "&#x041E;"],
		["Ő", "&Odblac;", "&#x0150;"],
		["Ο", "&Ogr;", "&#x039F;"],
		["Ò", "&Ograve;", "&#x00D2;"],
		["Ō", "&Omacr;", "&#x014C;"],
		["Ω", "&Omega;", "&#x03A9;"],
		["Ο", "&Omicron;", "&#x039F;"],
		["Ø", "&Oslash;", "&#x00D8;"],
		["Õ", "&Otilde;", "&#x00D5;"],
		["Ö", "&Ouml;", "&#x00D6;"],
		["Φ", "&PHgr;", "&#x03A6;"],
		["Ψ", "&PSgr;", "&#x03A8;"],
		["П", "&Pcy;", "&#x041F;"],
		["Π", "&Pgr;", "&#x03A0;"],
		["Φ", "&Phi;", "&#x03A6;"],
		["Π", "&Pi;", "&#x03A0;"],
		["″", "&Prime;", "&#x2033;"],
		["Ψ", "&Psi;", "&#x03A8;"],
		["Ŕ", "&Racute;", "&#x0154;"],
		["↠", "&Rarr;", "&#x21A0;"],
		["Ř", "&Rcaron;", "&#x0158;"],
		["Ŗ", "&Rcedil;", "&#x0156;"],
		["Р", "&Rcy;", "&#x0420;"],
		["Ρ", "&Rgr;", "&#x03A1;"],
		["Ρ", "&Rho;", "&#x03A1;"],
		["Щ", "&SHCHcy;", "&#x0429;"],
		["Ш", "&SHcy;", "&#x0428;"],
		["Ь", "&SOFTcy;", "&#x042C;"],
		["Ś", "&Sacute;", "&#x015A;"],
		["Š", "&Scaron;", "&#x0160;"],
		["Ş", "&Scedil;", "&#x015E;"],
		["Ŝ", "&Scirc;", "&#x015C;"],
		["С", "&Scy;", "&#x0421;"],
		["Σ", "&Sgr;", "&#x03A3;"],
		["Σ", "&Sigma;", "&#x03A3;"],
		["⋐", "&Sub;", "&#x22D0;"],
		["⋑", "&Sup;", "&#x22D1;"],
		["Þ", "&THORN;", "&#x00DE;"],
		["Θ", "&THgr;", "&#x0398;"],
		["Ћ", "&TSHcy;", "&#x040B;"],
		["Ц", "&TScy;", "&#x0426;"],
		["Τ", "&Tau;", "&#x03A4;"],
		["Ť", "&Tcaron;", "&#x0164;"],
		["Ţ", "&Tcedil;", "&#x0162;"],
		["Т", "&Tcy;", "&#x0422;"],
		["Τ", "&Tgr;", "&#x03A4;"],
		["Θ", "&Theta;", "&#x0398;"],
		["Ŧ", "&Tstrok;", "&#x0166;"],
		["Ύ", "&Uacgr;", "&#x038E;"],
		["Ú", "&Uacute;", "&#x00DA;"],
		["Ў", "&Ubrcy;", "&#x040E;"],
		["Ŭ", "&Ubreve;", "&#x016C;"],
		["Û", "&Ucirc;", "&#x00DB;"],
		["У", "&Ucy;", "&#x0423;"],
		["Ű", "&Udblac;", "&#x0170;"],
		["Ϋ", "&Udigr;", "&#x03AB;"],
		["Υ", "&Ugr;", "&#x03A5;"],
		["Ù", "&Ugrave;", "&#x00D9;"],
		["Ū", "&Umacr;", "&#x016A;"],
		["Ų", "&Uogon;", "&#x0172;"],
		["Υ", "&Upsi;", "&#x03A5;"],
		["Υ", "&Upsilon;", "&#x03A5;"],
		["Ů", "&Uring;", "&#x016E;"],
		["Ũ", "&Utilde;", "&#x0168;"],
		["Ü", "&Uuml;", "&#x00DC;"],
		["В", "&Vcy;", "&#x0412;"],
		["⊩", "&Vdash;", "&#x22A9;"],
		["‖", "&Verbar;", "&#x2016;"],
		["⊪", "&Vvdash;", "&#x22AA;"],
		["Ŵ", "&Wcirc;", "&#x0174;"],
		["Ξ", "&Xgr;", "&#x039E;"],
		["Ξ", "&Xi;", "&#x039E;"],
		["Я", "&YAcy;", "&#x042F;"],
		["Ї", "&YIcy;", "&#x0407;"],
		["Ю", "&YUcy;", "&#x042E;"],
		["Ý", "&Yacute;", "&#x00DD;"],
		["Ŷ", "&Ycirc;", "&#x0176;"],
		["Ы", "&Ycy;", "&#x042B;"],
		["Ÿ", "&Yuml;", "&#x0178;"],
		["Ж", "&ZHcy;", "&#x0416;"],
		["Ź", "&Zacute;", "&#x0179;"],
		["Ž", "&Zcaron;", "&#x017D;"],
		["З", "&Zcy;", "&#x0417;"],
		["Ż", "&Zdot;", "&#x017B;"],
		["Ζ", "&Zeta;", "&#x0396;"],
		["Ζ", "&Zgr;", "&#x0396;"],
		["ά", "&aacgr;", "&#x03AC;"],
		["á", "&aacute;", "&#x00E1;"],
		["ă", "&abreve;", "&#x0103;"],
		["â", "&acirc;", "&#x00E2;"],
		["´", "&acute;", "&#x00B4;"],
		["а", "&acy;", "&#x0430;"],
		["æ", "&aelig;", "&#x00E6;"],
		["α", "&agr;", "&#x03B1;"],
		["à", "&agrave;", "&#x00E0;"],
		["ℵ", "&alefsym;", "&#x2135;"],
		["ℵ", "&aleph;", "&#x2135;"],
		["α", "&alpha;", "&#x03B1;"],
		["ā", "&amacr;", "&#x0101;"],
		["∐", "&amalg;", "&#x2210;"],
		["&", "&amp;", "&#x0026;"],
		["∧", "&and;", "&#x2227;"],
		["∠", "&ang;", "&#x2220;"],
		["∟", "&ang90;", "&#x221F;"],
		["∡", "&angmsd;", "&#x2221;"],
		["∢", "&angsph;", "&#x2222;"],
		["Å", "&angst;", "&#x212B;"],
		["ą", "&aogon;", "&#x0105;"],
		["≈", "&ap;", "&#x2248;"],
		["≊", "&ape;", "&#x224A;"],
		["ʼ", "&apos;", "&#x02BC;"],
		["å", "&aring;", "&#x00E5;"],
		["*", "&ast;", "&#x002A;"],
		["≈", "&asymp;", "&#x2248;"],
		["ã", "&atilde;", "&#x00E3;"],
		["ä", "&auml;", "&#x00E4;"],
		["Δ", "&b.Delta;", "&#x0394;"],
		["Γ", "&b.Gamma;", "&#x0393;"],
		["Λ", "&b.Lambda;", "&#x039B;"],
		["Ω", "&b.Omega;", "&#x03A9;"],
		["Φ", "&b.Phi;", "&#x03A6;"],
		["Π", "&b.Pi;", "&#x03A0;"],
		["Ψ", "&b.Psi;", "&#x03A8;"],
		["Σ", "&b.Sigma;", "&#x03A3;"],
		["Θ", "&b.Theta;", "&#x0398;"],
		["Υ", "&b.Upsi;", "&#x03A5;"],
		["Ξ", "&b.Xi;", "&#x039E;"],
		["α", "&b.alpha;", "&#x03B1;"],
		["β", "&b.beta;", "&#x03B2;"],
		["χ", "&b.chi;", "&#x03C7;"],
		["δ", "&b.delta;", "&#x03B4;"],
		["ε", "&b.epsi;", "&#x03B5;"],
		["ε", "&b.epsis;", "&#x03B5;"],
		["ε", "&b.epsiv;", "&#x03B5;"],
		["η", "&b.eta;", "&#x03B7;"],
		["γ", "&b.gamma;", "&#x03B3;"],
		["Ϝ", "&b.gammad;", "&#x03DC;"],
		["ι", "&b.iota;", "&#x03B9;"],
		["κ", "&b.kappa;", "&#x03BA;"],
		["ϰ", "&b.kappav;", "&#x03F0;"],
		["λ", "&b.lambda;", "&#x03BB;"],
		["μ", "&b.mu;", "&#x03BC;"],
		["ν", "&b.nu;", "&#x03BD;"],
		["ώ", "&b.omega;", "&#x03CE;"],
		["φ", "&b.phis;", "&#x03C6;"],
		["ϕ", "&b.phiv;", "&#x03D5;"],
		["π", "&b.pi;", "&#x03C0;"],
		["ϖ", "&b.piv;", "&#x03D6;"],
		["ψ", "&b.psi;", "&#x03C8;"],
		["ρ", "&b.rho;", "&#x03C1;"],
		["ϱ", "&b.rhov;", "&#x03F1;"],
		["σ", "&b.sigma;", "&#x03C3;"],
		["ς", "&b.sigmav;", "&#x03C2;"],
		["τ", "&b.tau;", "&#x03C4;"],
		["θ", "&b.thetas;", "&#x03B8;"],
		["ϑ", "&b.thetav;", "&#x03D1;"],
		["υ", "&b.upsi;", "&#x03C5;"],
		["ξ", "&b.xi;", "&#x03BE;"],
		["ζ", "&b.zeta;", "&#x03B6;"],
		["⊼", "&barwed;", "&#x22BC;"],
		["≌", "&bcong;", "&#x224C;"],
		["б", "&bcy;", "&#x0431;"],
		["„", "&bdquo;", "&#x201E;"],
		["∵", "&becaus;", "&#x2235;"],
		["∍", "&bepsi;", "&#x220D;"],
		["ℬ", "&bernou;", "&#x212C;"],
		["β", "&beta;", "&#x03B2;"],
		["ℶ", "&beth;", "&#x2136;"],
		["β", "&bgr;", "&#x03B2;"],
		["␣", "&blank;", "&#x2423;"],
		["▒", "&blk12;", "&#x2592;"],
		["░", "&blk14;", "&#x2591;"],
		["▓", "&blk34;", "&#x2593;"],
		["█", "&block;", "&#x2588;"],
		["⊥", "&bottom;", "&#x22A5;"],
		["⋈", "&bowtie;", "&#x22C8;"],
		["╗", "&boxDL;", "&#x2557;"],
		["╔", "&boxDR;", "&#x2554;"],
		["╖", "&boxDl;", "&#x2556;"],
		["╓", "&boxDr;", "&#x2553;"],
		["═", "&boxH;", "&#x2550;"],
		["╦", "&boxHD;", "&#x2566;"],
		["╩", "&boxHU;", "&#x2569;"],
		["╤", "&boxHd;", "&#x2564;"],
		["╧", "&boxHu;", "&#x2567;"],
		["╝", "&boxUL;", "&#x255D;"],
		["╚", "&boxUR;", "&#x255A;"],
		["╜", "&boxUl;", "&#x255C;"],
		["╙", "&boxUr;", "&#x2559;"],
		["║", "&boxV;", "&#x2551;"],
		["╬", "&boxVH;", "&#x256C;"],
		["╣", "&boxVL;", "&#x2563;"],
		["╠", "&boxVR;", "&#x2560;"],
		["╫", "&boxVh;", "&#x256B;"],
		["╢", "&boxVl;", "&#x2562;"],
		["╟", "&boxVr;", "&#x255F;"],
		["╕", "&boxdL;", "&#x2555;"],
		["╒", "&boxdR;", "&#x2552;"],
		["┐", "&boxdl;", "&#x2510;"],
		["┌", "&boxdr;", "&#x250C;"],
		["─", "&boxh;", "&#x2500;"],
		["╥", "&boxhD;", "&#x2565;"],
		["╨", "&boxhU;", "&#x2568;"],
		["┬", "&boxhd;", "&#x252C;"],
		["┴", "&boxhu;", "&#x2534;"],
		["╛", "&boxuL;", "&#x255B;"],
		["╘", "&boxuR;", "&#x2558;"],
		["┘", "&boxul;", "&#x2518;"],
		["└", "&boxur;", "&#x2514;"],
		["│", "&boxv;", "&#x2502;"],
		["╪", "&boxvH;", "&#x256A;"],
		["╡", "&boxvL;", "&#x2561;"],
		["╞", "&boxvR;", "&#x255E;"],
		["┼", "&boxvh;", "&#x253C;"],
		["┤", "&boxvl;", "&#x2524;"],
		["├", "&boxvr;", "&#x251C;"],
		["‵", "&bprime;", "&#x2035;"],
		["˘", "&breve;", "&#x02D8;"],
		["¦", "&brkbar;", "&#x00A6;"],
		["¦", "&brvbar;", "&#x00A6;"],
		["∽", "&bsim;", "&#x223D;"],
		["⋍", "&bsime;", "&#x22CD;"],
		["•", "&bull;", "&#x2022;"],
		["≎", "&bump;", "&#x224E;"],
		["≏", "&bumpe;", "&#x224F;"],
		["ć", "&cacute;", "&#x0107;"],
		["∩", "&cap;", "&#x2229;"],
		["⁁", "&caret;", "&#x2041;"],
		["ˇ", "&caron;", "&#x02C7;"],
		["č", "&ccaron;", "&#x010D;"],
		["ç", "&ccedil;", "&#x00E7;"],
		["ĉ", "&ccirc;", "&#x0109;"],
		["ċ", "&cdot;", "&#x010B;"],
		["¸", "&cedil;", "&#x00B8;"],
		["¢", "&cent;", "&#x00A2;"],
		["ч", "&chcy;", "&#x0447;"],
		["✓", "&check;", "&#x2713;"],
		["χ", "&chi;", "&#x03C7;"],
		["○", "&cir;", "&#x25CB;"],
		["ˆ", "&circ;", "&#x02C6;"],
		["≗", "&cire;", "&#x2257;"],
		// ["♣", "&clubs;", "&#x2663;"],
		[":", "&colon;", "&#x003A;"],
		["≔", "&colone;", "&#x2254;"],
		[",", "&comma;", "&#x002C;"],
		["@", "&commat;", "&#x0040;"],
		["∁", "&comp;", "&#x2201;"],
		["∘", "&compfn;", "&#x2218;"],
		["≅", "&cong;", "&#x2245;"],
		["∮", "&conint;", "&#x222E;"],
		["∐", "&coprod;", "&#x2210;"],
		["©", "&copy;", "&#x00A9;"],
		["℗", "&copysr;", "&#x2117;"],
		["↵", "&crarr;", "&#x21B5;"],
		["✗", "&cross;", "&#x2717;"],
		["⋞", "&cuepr;", "&#x22DE;"],
		["⋟", "&cuesc;", "&#x22DF;"],
		["↶", "&cularr;", "&#x21B6;"],
		["∪", "&cup;", "&#x222A;"],
		["≼", "&cupre;", "&#x227C;"],
		["↷", "&curarr;", "&#x21B7;"],
		["¤", "&curren;", "&#x00A4;"],
		["⋎", "&cuvee;", "&#x22CE;"],
		["⋏", "&cuwed;", "&#x22CF;"],
		["⇓", "&dArr;", "&#x21D3;"],
		["†", "&dagger;", "&#x2020;"],
		["ℸ", "&daleth;", "&#x2138;"],
		// ["↓", "&darr;", "&#x2193;"],
		["⇊", "&darr2;", "&#x21CA;"],
		["‐", "&dash;", "&#x2010;"],
		["⊣", "&dashv;", "&#x22A3;"],
		["˝", "&dblac;", "&#x02DD;"],
		["ď", "&dcaron;", "&#x010F;"],
		["д", "&dcy;", "&#x0434;"],
		["°", "&deg;", "&#x00B0;"],
		["δ", "&delta;", "&#x03B4;"],
		["δ", "&dgr;", "&#x03B4;"],
		["⇃", "&dharl;", "&#x21C3;"],
		["⇂", "&dharr;", "&#x21C2;"],
		["⋄", "&diam;", "&#x22C4;"],
		// ["♦", "&diams;", "&#x2666;"],
		["¨", "&die;", "&#x00A8;"],
		["÷", "&divide;", "&#x00F7;"],
		["⋇", "&divonx;", "&#x22C7;"],
		["ђ", "&djcy;", "&#x0452;"],
		["↙", "&dlarr;", "&#x2199;"],
		["⌞", "&dlcorn;", "&#x231E;"],
		["⌍", "&dlcrop;", "&#x230D;"],
		["$", "&dollar;", "&#x0024;"],
		["˙", "&dot;", "&#x02D9;"],
		["↘", "&drarr;", "&#x2198;"],
		["⌟", "&drcorn;", "&#x231F;"],
		["⌌", "&drcrop;", "&#x230C;"],
		["ѕ", "&dscy;", "&#x0455;"],
		["đ", "&dstrok;", "&#x0111;"],
		["▿", "&dtri;", "&#x25BF;"],
		["▾", "&dtrif;", "&#x25BE;"],
		["џ", "&dzcy;", "&#x045F;"],
		["≑", "&eDot;", "&#x2251;"],
		["έ", "&eacgr;", "&#x03AD;"],
		["é", "&eacute;", "&#x00E9;"],
		["ě", "&ecaron;", "&#x011B;"],
		["≖", "&ecir;", "&#x2256;"],
		["ê", "&ecirc;", "&#x00EA;"],
		["≕", "&ecolon;", "&#x2255;"],
		["э", "&ecy;", "&#x044D;"],
		["ė", "&edot;", "&#x0117;"],
		["ή", "&eeacgr;", "&#x03AE;"],
		["η", "&eegr;", "&#x03B7;"],
		["≒", "&efDot;", "&#x2252;"],
		["ε", "&egr;", "&#x03B5;"],
		["è", "&egrave;", "&#x00E8;"],
		["⋝", "&egs;", "&#x22DD;"],
		["ℓ", "&ell;", "&#x2113;"],
		["⋜", "&els;", "&#x22DC;"],
		["ē", "&emacr;", "&#x0113;"],
		["—", "&emdash;", "&#x2014;"],
		["∅", "&empty;", "&#x2205;"],
		[" ", "&emsp;", "&#x2003;"],
		[" ", "&emsp13;", "&#x2004;"],
		[" ", "&emsp14;", "&#x2005;"],
		["–", "&endash;", "&#x2013;"],
		["ŋ", "&eng;", "&#x014B;"],
		[" ", "&ensp;", "&#x2002;"],
		["ę", "&eogon;", "&#x0119;"],
		["ε", "&epsi;", "&#x03B5;"],
		["ε", "&epsilon;", "&#x03B5;"],
		["∊", "&epsis;", "&#x220A;"],
		["=", "&equals;", "&#x003D;"],
		["≡", "&equiv;", "&#x2261;"],
		["≓", "&erDot;", "&#x2253;"],
		["≐", "&esdot;", "&#x2250;"],
		["η", "&eta;", "&#x03B7;"],
		["ð", "&eth;", "&#x00F0;"],
		["ë", "&euml;", "&#x00EB;"],
		["€", "&euro;", "&#x20AC;"],
		["!", "&excl;", "&#x0021;"],
		["∃", "&exist;", "&#x2203;"],
		["ф", "&fcy;", "&#x0444;"],
		["♀", "&female;", "&#x2640;"],
		["ﬃ", "&ffilig;", "&#xFB03;"],
		["ﬀ", "&fflig;", "&#xFB00;"],
		["ﬄ", "&ffllig;", "&#xFB04;"],
		["ﬁ", "&filig;", "&#xFB01;"],
		["♭", "&flat;", "&#x266D;"],
		["ﬂ", "&fllig;", "&#xFB02;"],
		["ƒ", "&fnof;", "&#x0192;"],
		["∀", "&forall;", "&#x2200;"],
		["⋔", "&fork;", "&#x22D4;"],
		["½", "&frac12;", "&#x00BD;"],
		["⅓", "&frac13;", "&#x2153;"],
		["¼", "&frac14;", "&#x00BC;"],
		["⅕", "&frac15;", "&#x2155;"],
		["⅙", "&frac16;", "&#x2159;"],
		["⅛", "&frac18;", "&#x215B;"],
		["⅔", "&frac23;", "&#x2154;"],
		["⅖", "&frac25;", "&#x2156;"],
		["¾", "&frac34;", "&#x00BE;"],
		["⅗", "&frac35;", "&#x2157;"],
		["⅜", "&frac38;", "&#x215C;"],
		["⅘", "&frac45;", "&#x2158;"],
		["⅚", "&frac56;", "&#x215A;"],
		["⅝", "&frac58;", "&#x215D;"],
		["⅞", "&frac78;", "&#x215E;"],
		["⁄", "&frasl;", "&#x2044;"],
		["⌢", "&frown;", "&#x2639;"],
		["ǵ", "&gacute;", "&#x01F5;"],
		["γ", "&gamma;", "&#x03B3;"],
		["Ϝ", "&gammad;", "&#x03DC;"],
		["ğ", "&gbreve;", "&#x011F;"],
		["ģ", "&gcedil;", "&#x0123;"],
		["ĝ", "&gcirc;", "&#x011D;"],
		["г", "&gcy;", "&#x0433;"],
		["ġ", "&gdot;", "&#x0121;"],
		["≥", "&ge;", "&#x2265;"],
		["⋛", "&gel;", "&#x22DB;"],
		["≥", "&ges;", "&#x2265;"],
		["γ", "&ggr;", "&#x03B3;"],
		["ℷ", "&gimel;", "&#x2137;"],
		["ѓ", "&gjcy;", "&#x0453;"],
		["≷", "&gl;", "&#x2277;"],
		["≩", "&gnE;", "&#x2269;"],
		["≩", "&gne;", "&#x2269;"],
		["⋧", "&gnsim;", "&#x22E7;"],
		["`", "&grave;", "&#x0060;"],
		["⋗", "&gsdot;", "&#x22D7;"],
		["≳", "&gsim;", "&#x2273;"],
		[">", "&gt;", "&#x003E;"],
		["≩", "&gvnE;", "&#x2269;"],
		["⇔", "&hArr;", "&#x21D4;"],
		[" ", "&hairsp;", "&#x200A;"],
		["½", "&half;", "&#x00BD;"],
		["ℋ", "&hamilt;", "&#x210B;"],
		["ъ", "&hardcy;", "&#x044A;"],
		["↔", "&harr;", "&#x2194;"],
		["↭", "&harrw;", "&#x21AD;"],
		["ĥ", "&hcirc;", "&#x0125;"],
		// ["♥", "&hearts;", "&#x2665;"],
		["…", "&hellip;", "&#x2026;"],
		["¯", "&hibar;", "&#x00AF;"],
		["―", "&horbar;", "&#x2015;"],
		["ħ", "&hstrok;", "&#x0127;"],
		["⁃", "&hybull;", "&#x2043;"],
		["-", "&hyphen;", "&#x002D;"],
		["ί", "&iacgr;", "&#x03AF;"],
		["í", "&iacute;", "&#x00ED;"],
		["î", "&icirc;", "&#x00EE;"],
		["и", "&icy;", "&#x0438;"],
		["ΐ", "&idiagr;", "&#x0390;"],
		["ϊ", "&idigr;", "&#x03CA;"],
		["е", "&iecy;", "&#x0435;"],
		["¡", "&iexcl;", "&#x00A1;"],
		["⇔", "&iff;", "&#x21D4;"],
		["ι", "&igr;", "&#x03B9;"],
		["ì", "&igrave;", "&#x00EC;"],
		["ĳ", "&ijlig;", "&#x0133;"],
		["ī", "&imacr;", "&#x012B;"],
		["ℑ", "&image;", "&#x2111;"],
		["℅", "&incare;", "&#x2105;"],
		["∞", "&infin;", "&#x221E;"],
		["ı", "&inodot;", "&#x0131;"],
		["∫", "&int;", "&#x222B;"],
		["⊺", "&intcal;", "&#x22BA;"],
		["ё", "&iocy;", "&#x0451;"],
		["į", "&iogon;", "&#x012F;"],
		["ι", "&iota;", "&#x03B9;"],
		["¿", "&iquest;", "&#x00BF;"],
		["∈", "&isin;", "&#x2208;"],
		["ĩ", "&itilde;", "&#x0129;"],
		["і", "&iukcy;", "&#x0456;"],
		["ï", "&iuml;", "&#x00EF;"],
		["ĵ", "&jcirc;", "&#x0135;"],
		["й", "&jcy;", "&#x0439;"],
		["ј", "&jsercy;", "&#x0458;"],
		["є", "&jukcy;", "&#x0454;"],
		["κ", "&kappa;", "&#x03BA;"],
		["ϰ", "&kappav;", "&#x03F0;"],
		["ķ", "&kcedil;", "&#x0137;"],
		["к", "&kcy;", "&#x043A;"],
		["κ", "&kgr;", "&#x03BA;"],
		["ĸ", "&kgreen;", "&#x0138;"],
		["х", "&khcy;", "&#x0445;"],
		["χ", "&khgr;", "&#x03C7;"],
		["ќ", "&kjcy;", "&#x045C;"],
		["⇚", "&lAarr;", "&#x21DA;"],
		["⇐", "&lArr;", "&#x21D0;"],
		["≦", "&lE;", "&#x2266;"],
		["ĺ", "&lacute;", "&#x013A;"],
		["ℒ", "&lagran;", "&#x2112;"],
		["λ", "&lambda;", "&#x03BB;"],
		["〈", "&lang;", "&#x2329;"],
		["«", "&laquo;", "&#x00AB;"],
		["←", "&larr;", "&#x2190;"],
		["⇇", "&larr2;", "&#x21C7;"],
		["↩", "&larrhk;", "&#x21A9;"],
		["↫", "&larrlp;", "&#x21AB;"],
		["↢", "&larrtl;", "&#x21A2;"],
		["ľ", "&lcaron;", "&#x013E;"],
		["ļ", "&lcedil;", "&#x013C;"],
		["⌈", "&lceil;", "&#x2308;"],
		["{", "&lcub;", "&#x007B;"],
		["л", "&lcy;", "&#x043B;"],
		["⋖", "&ldot;", "&#x22D6;"],
		["“", "&ldquo;", "&#x201C;"],
		["„", "&ldquor;", "&#x201E;"],
		["≤", "&le;", "&#x2264;"],
		["⋚", "&leg;", "&#x22DA;"],
		["≤", "&les;", "&#x2264;"],
		["⌊", "&lfloor;", "&#x230A;"],
		["≶", "&lg;", "&#x2276;"],
		["λ", "&lgr;", "&#x03BB;"],
		["↽", "&lhard;", "&#x21BD;"],
		["↼", "&lharu;", "&#x21BC;"],
		["▄", "&lhblk;", "&#x2584;"],
		["љ", "&ljcy;", "&#x0459;"],
		["ŀ", "&lmidot;", "&#x0140;"],
		["≨", "&lnE;", "&#x2268;"],
		["≨", "&lne;", "&#x2268;"],
		["⋦", "&lnsim;", "&#x22E6;"],
		["∗", "&lowast;", "&#x2217;"],
		["_", "&lowbar;", "&#x005F;"],
		["◊", "&loz;", "&#x25CA;"],
		["✦", "&lozf;", "&#x2726;"],
		["(", "&lpar;", "&#x0028;"],
		["⇆", "&lrarr2;", "&#x21C6;"],
		["⇋", "&lrhar2;", "&#x21CB;"],
		["‎", "&lrm;", "&#x200E;"],
		["‹", "&lsaquo;", "&#x2039;"],
		["↰", "&lsh;", "&#x21B0;"],
		["≲", "&lsim;", "&#x2272;"],
		["[", "&lsqb;", "&#x005B;"],
		["‘", "&lsquo;", "&#x2018;"],
		["‚", "&lsquor;", "&#x201A;"],
		["ł", "&lstrok;", "&#x0142;"],
		["<", "&lt;", "&#x003C;"],
		["⋋", "&lthree;", "&#x22CB;"],
		["⋉", "&ltimes;", "&#x22C9;"],
		["◃", "&ltri;", "&#x25C3;"],
		["⊴", "&ltrie;", "&#x22B4;"],
		["◂", "&ltrif;", "&#x25C2;"],
		["≨", "&lvnE;", "&#x2268;"],
		["¯", "&macr;", "&#x00AF;"],
		["♂", "&male;", "&#x2642;"],
		["✠", "&malt;", "&#x2720;"],
		["↦", "&map;", "&#x21A6;"],
		["▮", "&marker;", "&#x25AE;"],
		["м", "&mcy;", "&#x043C;"],
		["—", "&mdash;", "&#x2014;"],
		["μ", "&mgr;", "&#x03BC;"],
		["µ", "&micro;", "&#x00B5;"],
		["∣", "&mid;", "&#x2223;"],
		["·", "&middot;", "&#x00B7;"],
		["−", "&minus;", "&#x2212;"],
		["⊟", "&minusb;", "&#x229F;"],
		["…", "&mldr;", "&#x2026;"],
		["∓", "&mnplus;", "&#x2213;"],
		["⊧", "&models;", "&#x22A7;"],
		["μ", "&mu;", "&#x03BC;"],
		["⊸", "&mumap;", "&#x22B8;"],
		["⊯", "&nVDash;", "&#x22AF;"],
		["⊮", "&nVdash;", "&#x22AE;"],
		["∇", "&nabla;", "&#x2207;"],
		["ń", "&nacute;", "&#x0144;"],
		["≉", "&nap;", "&#x2249;"],
		["ŉ", "&napos;", "&#x0149;"],
		["♮", "&natur;", "&#x266E;"],
		[" ", "&nbsp;", "&#x00A0;"],
		["ň", "&ncaron;", "&#x0148;"],
		["ņ", "&ncedil;", "&#x0146;"],
		["≇", "&ncong;", "&#x2247;"],
		["н", "&ncy;", "&#x043D;"],
		["–", "&ndash;", "&#x2013;"],
		["≠", "&ne;", "&#x2260;"],
		["↗", "&nearr;", "&#x2197;"],
		["≢", "&nequiv;", "&#x2262;"],
		["∄", "&nexist;", "&#x2204;"],
		["≱", "&nge;", "&#x2271;"],
		["≱", "&nges;", "&#x2271;"],
		["ν", "&ngr;", "&#x03BD;"],
		["≯", "&ngt;", "&#x226F;"],
		["⇎", "&nhArr;", "&#x21CE;"],
		["↮", "&nharr;", "&#x21AE;"],
		["∋", "&ni;", "&#x220B;"],
		["њ", "&njcy;", "&#x045A;"],
		["⇍", "&nlArr;", "&#x21CD;"],
		["↚", "&nlarr;", "&#x219A;"],
		["‥", "&nldr;", "&#x2025;"],
		["≰", "&nle;", "&#x2270;"],
		["≰", "&nles;", "&#x2270;"],
		["≮", "&nlt;", "&#x226E;"],
		["⋪", "&nltri;", "&#x22EA;"],
		["⋬", "&nltrie;", "&#x22EC;"],
		["∤", "&nmid;", "&#x2224;"],
		["¬", "&not;", "&#x00AC;"],
		["∉", "&notin;", "&#x2209;"],
		["∦", "&npar;", "&#x2226;"],
		["⊀", "&npr;", "&#x2280;"],
		["⋠", "&npre;", "&#x22E0;"],
		["⇏", "&nrArr;", "&#x21CF;"],
		["↛", "&nrarr;", "&#x219B;"],
		["⋫", "&nrtri;", "&#x22EB;"],
		["⋭", "&nrtrie;", "&#x22ED;"],
		["⊁", "&nsc;", "&#x2281;"],
		["⋡", "&nsce;", "&#x22E1;"],
		["≁", "&nsim;", "&#x2241;"],
		["≄", "&nsime;", "&#x2244;"],
		["∦", "&nspar;", "&#x2226;"],
		["⊄", "&nsub;", "&#x2284;"],
		["⊈", "&nsubE;", "&#x2288;"],
		["⊈", "&nsube;", "&#x2288;"],
		["⊅", "&nsup;", "&#x2285;"],
		["⊉", "&nsupE;", "&#x2289;"],
		["⊉", "&nsupe;", "&#x2289;"],
		["ñ", "&ntilde;", "&#x00F1;"],
		["ν", "&nu;", "&#x03BD;"],
		["#", "&num;", "&#x0023;"],
		["№", "&numero;", "&#x2116;"],
		[" ", "&numsp;", "&#x2007;"],
		["⊭", "&nvDash;", "&#x22AD;"],
		["⊬", "&nvdash;", "&#x22AC;"],
		["↖", "&nwarr;", "&#x2196;"],
		["Ⓢ", "&oS;", "&#x24C8;"],
		["ό", "&oacgr;", "&#x03CC;"],
		["ó", "&oacute;", "&#x00F3;"],
		["⊛", "&oast;", "&#x229B;"],
		["⊚", "&ocir;", "&#x229A;"],
		["ô", "&ocirc;", "&#x00F4;"],
		["о", "&ocy;", "&#x043E;"],
		["⊝", "&odash;", "&#x229D;"],
		["ő", "&odblac;", "&#x0151;"],
		["⊙", "&odot;", "&#x2299;"],
		["œ", "&oelig;", "&#x0153;"],
		["˛", "&ogon;", "&#x02DB;"],
		["ο", "&ogr;", "&#x03BF;"],
		["ò", "&ograve;", "&#x00F2;"],
		["ώ", "&ohacgr;", "&#x03CE;"],
		["ω", "&ohgr;", "&#x03C9;"],
		["Ω", "&ohm;", "&#x2126;"],
		["↺", "&olarr;", "&#x21BA;"],
		["‾", "&oline;", "&#x203E;"],
		["ō", "&omacr;", "&#x014D;"],
		["ω", "&omega;", "&#x03C9;"],
		["ο", "&omicron;", "&#x03BF;"],
		["⊖", "&ominus;", "&#x2296;"],
		["⊕", "&oplus;", "&#x2295;"],
		["∨", "&or;", "&#x2228;"],
		["↻", "&orarr;", "&#x21BB;"],
		["ℴ", "&order;", "&#x2134;"],
		["ª", "&ordf;", "&#x00AA;"],
		["º", "&ordm;", "&#x00BA;"],
		["ø", "&oslash;", "&#x00F8;"],
		["⊘", "&osol;", "&#x2298;"],
		["õ", "&otilde;", "&#x00F5;"],
		["⊗", "&otimes;", "&#x2297;"],
		["ö", "&ouml;", "&#x00F6;"],
		["∥", "&par;", "&#x2225;"],
		["¶", "&para;", "&#x00B6;"],
		["∂", "&part;", "&#x2202;"],
		["п", "&pcy;", "&#x043F;"],
		["%", "&percnt;", "&#x0025;"],
		[".", "&period;", "&#x002E;"],
		["‰", "&permil;", "&#x2030;"],
		["⊥", "&perp;", "&#x22A5;"],
		["π", "&pgr;", "&#x03C0;"],
		["φ", "&phgr;", "&#x03C6;"],
		["φ", "&phi;", "&#x03C6;"],
		["φ", "&phis;", "&#x03C6;"],
		["ϕ", "&phiv;", "&#x03D5;"],
		["ℳ", "&phmmat;", "&#x2133;"],
		["☎", "&phone;", "&#x260E;"],
		["π", "&pi;", "&#x03C0;"],
		["ϖ", "&piv;", "&#x03D6;"],
		["ℏ", "&planck;", "&#x210F;"],
		["+", "&plus;", "&#x002B;"],
		["⊞", "&plusb;", "&#x229E;"],
		["∔", "&plusdo;", "&#x2214;"],
		["±", "&plusmn;", "&#x00B1;"],
		["£", "&pound;", "&#x00A3;"],
		["≺", "&pr;", "&#x227A;"],
		["≼", "&pre;", "&#x227C;"],
		["′", "&prime;", "&#x2032;"],
		["⋨", "&prnsim;", "&#x22E8;"],
		["∏", "&prod;", "&#x220F;"],
		["∝", "&prop;", "&#x221D;"],
		["≾", "&prsim;", "&#x227E;"],
		["ψ", "&psgr;", "&#x03C8;"],
		["ψ", "&psi;", "&#x03C8;"],
		["⇛", "&rAarr;", "&#x21DB;"],
		["⇒", "&rArr;", "&#x21D2;"],
		["ŕ", "&racute;", "&#x0155;"],
		["√", "&radic;", "&#x221A;"],
		["〉", "&rang;", "&#x232A;"],
		["»", "&raquo;", "&#x00BB;"],
		["→", "&rarr;", "&#x2192;"],
		["⇉", "&rarr2;", "&#x21C9;"],
		["↪", "&rarrhk;", "&#x21AA;"],
		["↬", "&rarrlp;", "&#x21AC;"],
		["↣", "&rarrtl;", "&#x21A3;"],
		["↝", "&rarrw;", "&#x219D;"],
		["ř", "&rcaron;", "&#x0159;"],
		["ŗ", "&rcedil;", "&#x0157;"],
		["⌉", "&rceil;", "&#x2309;"],
		["}", "&rcub;", "&#x007D;"],
		["р", "&rcy;", "&#x0440;"],
		["”", "&rdquo;", "&#x201D;"],
		["“", "&rdquor;", "&#x201C;"],
		["ℜ", "&real;", "&#x211C;"],
		["▭", "&rect;", "&#x25AD;"],
		["®", "&reg;", "&#x00AE;"],
		["⌋", "&rfloor;", "&#x230B;"],
		["ρ", "&rgr;", "&#x03C1;"],
		["⇁", "&rhard;", "&#x21C1;"],
		["⇀", "&rharu;", "&#x21C0;"],
		["ρ", "&rho;", "&#x03C1;"],
		["ϱ", "&rhov;", "&#x03F1;"],
		["˚", "&ring;", "&#x02DA;"],
		["⇄", "&rlarr2;", "&#x21C4;"],
		["⇌", "&rlhar2;", "&#x21CC;"],
		["‏", "&rlm;", "&#x200F;"],
		[")", "&rpar;", "&#x0029;"],
		["›", "&rsaquo;", "&#x203A;"],
		["↱", "&rsh;", "&#x21B1;"],
		["]", "&rsqb;", "&#x005D;"],
		["’", "&rsquo;", "&#x2019;"],
		["‘", "&rsquor;", "&#x2018;"],
		["⋌", "&rthree;", "&#x22CC;"],
		["⋊", "&rtimes;", "&#x22CA;"],
		["▹", "&rtri;", "&#x25B9;"],
		["⊵", "&rtrie;", "&#x22B5;"],
		["▸", "&rtrif;", "&#x25B8;"],
		["℞", "&rx;", "&#x211E;"],
		["ś", "&sacute;", "&#x015B;"],
		["∐", "&samalg;", "&#x2210;"],
		["‚", "&sbquo;", "&#x201A;"],
		["≻", "&sc;", "&#x227B;"],
		["š", "&scaron;", "&#x0161;"],
		["≽", "&sccue;", "&#x227D;"],
		["≽", "&sce;", "&#x227D;"],
		["ş", "&scedil;", "&#x015F;"],
		["ŝ", "&scirc;", "&#x015D;"],
		["⋩", "&scnsim;", "&#x22E9;"],
		["≿", "&scsim;", "&#x227F;"],
		["с", "&scy;", "&#x0441;"],
		["⋅", "&sdot;", "&#x22C5;"],
		["⊡", "&sdotb;", "&#x22A1;"],
		["§", "&sect;", "&#x00A7;"],
		[";", "&semi;", "&#x003B;"],
		["∖", "&setmn;", "&#x2216;"],
		["✶", "&sext;", "&#x2736;"],
		["ς", "&sfgr;", "&#x03C2;"],
		["⌢", "&sfrown;", "&#x2322;"],
		["σ", "&sgr;", "&#x03C3;"],
		["♯", "&sharp;", "&#x266F;"],
		["щ", "&shchcy;", "&#x0449;"],
		["ш", "&shcy;", "&#x0448;"],
		["­", "&shy;", "&#x00AD;"],
		["σ", "&sigma;", "&#x03C3;"],
		["ς", "&sigmaf;", "&#x03C2;"],
		["ς", "&sigmav;", "&#x03C2;"],
		["∼", "&sim;", "&#x223C;"],
		["≃", "&sime;", "&#x2243;"],
		["☺", "&smile;", "&#x263A;"],
		["/", "&sol;", "&#x002F;"],
		["♠", "&spades;", "&#x2660;"],
		["∥", "&spar;", "&#x2225;"],
		["⊓", "&sqcap;", "&#x2293;"],
		["⊔", "&sqcup;", "&#x2294;"],
		["⊏", "&sqsub;", "&#x228F;"],
		["⊑", "&sqsube;", "&#x2291;"],
		["⊐", "&sqsup;", "&#x2290;"],
		["⊒", "&sqsupe;", "&#x2292;"],
		["□", "&squ;", "&#x25A1;"],
		["□", "&square;", "&#x25A1;"],
		["▪", "&squf;", "&#x25AA;"],
		["∖", "&ssetmn;", "&#x2216;"],
		["☻", "&ssmile;", "&#x263B;"],
		["☆", "&star;", "&#x2606;"],
		["★", "&starf;", "&#x2605;"],
		["⊂", "&sub;", "&#x2282;"],
		["⊆", "&subE;", "&#x2286;"],
		["⊆", "&sube;", "&#x2286;"],
		["⊊", "&subnE;", "&#x228A;"],
		["⊊", "&subne;", "&#x228A;"],
		["∑", "&sum;", "&#x2211;"],
		["♪", "&sung;", "&#x266A;"],
		["⊃", "&sup;", "&#x2283;"],
		["¹", "&sup1;", "&#x00B9;"],
		["²", "&sup2;", "&#x00B2;"],
		["³", "&sup3;", "&#x00B3;"],
		["⊇", "&supE;", "&#x2287;"],
		["⊇", "&supe;", "&#x2287;"],
		["⊋", "&supnE;", "&#x228B;"],
		["⊋", "&supne;", "&#x228B;"],
		["ß", "&szlig;", "&#x00DF;"],
		["⌖", "&target;", "&#x2316;"],
		["τ", "&tau;", "&#x03C4;"],
		["ť", "&tcaron;", "&#x0165;"],
		["ţ", "&tcedil;", "&#x0163;"],
		["т", "&tcy;", "&#x0442;"],
		["⃛", "&tdot;", "&#x20DB;"],
		["⌕", "&telrec;", "&#x2315;"],
		["τ", "&tgr;", "&#x03C4;"],
		["∴", "&there4;", "&#x2234;"],
		["θ", "&theta;", "&#x03B8;"],
		["θ", "&thetas;", "&#x03B8;"],
		["ϑ", "&thetasym;", "&#x03D1;"],
		["ϑ", "&thetav;", "&#x03D1;"],
		["θ", "&thgr;", "&#x03B8;"],
		[" ", "&thinsp;", "&#x2009;"],
		["≈", "&thkap;", "&#x2248;"],
		["∼", "&thksim;", "&#x223C;"],
		["þ", "&thorn;", "&#x00FE;"],
		["˜", "&tilde;", "&#x02DC;"],
		["×", "&times;", "&#x00D7;"],
		["⊠", "&timesb;", "&#x22A0;"],
		["⊤", "&top;", "&#x22A4;"],
		["‴", "&tprime;", "&#x2034;"],
		["™", "&trade;", "&#x2122;"],
		["≜", "&trie;", "&#x225C;"],
		["ц", "&tscy;", "&#x0446;"],
		["ћ", "&tshcy;", "&#x045B;"],
		["ŧ", "&tstrok;", "&#x0167;"],
		["≬", "&twixt;", "&#x226C;"],
		["⇑", "&uArr;", "&#x21D1;"],
		["ύ", "&uacgr;", "&#x03CD;"],
		["ú", "&uacute;", "&#x00FA;"],
		["↑", "&uarr;", "&#x2191;"],
		["⇈", "&uarr2;", "&#x21C8;"],
		["ў", "&ubrcy;", "&#x045E;"],
		["ŭ", "&ubreve;", "&#x016D;"],
		["û", "&ucirc;", "&#x00FB;"],
		["у", "&ucy;", "&#x0443;"],
		["ű", "&udblac;", "&#x0171;"],
		["ΰ", "&udiagr;", "&#x03B0;"],
		["ϋ", "&udigr;", "&#x03CB;"],
		["υ", "&ugr;", "&#x03C5;"],
		["ù", "&ugrave;", "&#x00F9;"],
		["↿", "&uharl;", "&#x21BF;"],
		["↾", "&uharr;", "&#x21BE;"],
		["▀", "&uhblk;", "&#x2580;"],
		["⌜", "&ulcorn;", "&#x231C;"],
		["⌏", "&ulcrop;", "&#x230F;"],
		["ū", "&umacr;", "&#x016B;"],
		["¨", "&uml;", "&#x00A8;"],
		["ų", "&uogon;", "&#x0173;"],
		["⊎", "&uplus;", "&#x228E;"],
		["υ", "&upsi;", "&#x03C5;"],
		["ϒ", "&upsih;", "&#x03D2;"],
		["υ", "&upsilon;", "&#x03C5;"],
		["⌝", "&urcorn;", "&#x231D;"],
		["⌎", "&urcrop;", "&#x230E;"],
		["ů", "&uring;", "&#x016F;"],
		["ũ", "&utilde;", "&#x0169;"],
		["▵", "&utri;", "&#x25B5;"],
		["▴", "&utrif;", "&#x25B4;"],
		["ü", "&uuml;", "&#x00FC;"],
		["⇕", "&vArr;", "&#x21D5;"],
		["⊨", "&vDash;", "&#x22A8;"],
		["↕", "&varr;", "&#x2195;"],
		["в", "&vcy;", "&#x0432;"],
		["⊢", "&vdash;", "&#x22A2;"],
		["⊻", "&veebar;", "&#x22BB;"],
		["⋮", "&vellip;", "&#x22EE;"],
		["|", "&verbar;", "&#x007C;"],
		["⊲", "&vltri;", "&#x22B2;"],
		["′", "&vprime;", "&#x2032;"],
		["∝", "&vprop;", "&#x221D;"],
		["⊳", "&vrtri;", "&#x22B3;"],
		["⊊", "&vsubnE;", "&#x228A;"],
		["⊊", "&vsubne;", "&#x228A;"],
		["⊋", "&vsupnE;", "&#x228B;"],
		["⊋", "&vsupne;", "&#x228B;"],
		["ŵ", "&wcirc;", "&#x0175;"],
		["≙", "&wedgeq;", "&#x2259;"],
		["℘", "&weierp;", "&#x2118;"],
		["≀", "&wreath;", "&#x2240;"],
		["○", "&xcirc;", "&#x25CB;"],
		["▽", "&xdtri;", "&#x25BD;"],
		["ξ", "&xgr;", "&#x03BE;"],
		["↔", "&xhArr;", "&#x2194;"],
		["↔", "&xharr;", "&#x2194;"],
		["ξ", "&xi;", "&#x03BE;"],
		["⇐", "&xlArr;", "&#x21D0;"],
		["⇒", "&xrArr;", "&#x21D2;"],
		["△", "&xutri;", "&#x25B3;"],
		["ý", "&yacute;", "&#x00FD;"],
		["я", "&yacy;", "&#x044F;"],
		["ŷ", "&ycirc;", "&#x0177;"],
		["ы", "&ycy;", "&#x044B;"],
		["¥", "&yen;", "&#x00A5;"],
		["ї", "&yicy;", "&#x0457;"],
		["ю", "&yucy;", "&#x044E;"],
		["ÿ", "&yuml;", "&#x00FF;"],
		["ź", "&zacute;", "&#x017A;"],
		["ž", "&zcaron;", "&#x017E;"],
		["з", "&zcy;", "&#x0437;"],
		["ż", "&zdot;", "&#x017C;"],
		["ζ", "&zeta;", "&#x03B6;"],
		["ζ", "&zgr;", "&#x03B6;"],
		["ж", "&zhcy;", "&#x0436;"],
		[null, "&zwj;", "&#x200D;"],
		[null, "&zwnj;", "&#x200C;"]
	];

	private $tableName = 'symbol';
	private $marker = 'bizzare';

    public function up()
    {
    	$query = new Query;
    	foreach ($this->seedData as $value) {
    		$result = $query->select('*')
    		    ->from($this->tableName)
    		    ->where('symbol = :symbol OR hex = :hex OR html = :html', [
    		    	':symbol' => $value[0],
    		    	':hex' => $value[2],
    		    	':html' => $value[1]
    		    ])
    		    ->limit(1)
    		    ->all();
    		if (!$result){
    			$this->insert($this->tableName, [
	    			'symbol' => $value[0],
	    			'html' => $value[1],
	    			'hex' => $value[2],
	    			'property' => $this->marker
	    		]);
    		}
    	}
    }

    public function down()
    {
    	$this->delete($this->tableName,
    		'property = :prop',
    		[':prop' => $this->marker]
    	);

       //  foreach ($this->seedData as $value) {
       //  	try {
		    	// $this->delete($this->tableName,
		    		// 'symbol = :symbol AND html = :html AND hex = :hex',
		    		// 'property = :prop',
		    		// [
		    		// ':symbol' => $value[0],
		    		// ':html' => $value[1],
		    		// ':hex' => $value[2],
		    		// ':prop' => $this->marker
				// ]);
        	// } catch (Exception $e) {
        		// echo $e->getMessage() . PHP_EOL;
        	// }

    	// }
    	echo "Table $this->tableName is cleaned from provided data."  . PHP_EOL;
    	return true;
    }
}
