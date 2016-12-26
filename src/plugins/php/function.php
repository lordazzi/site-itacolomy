<?php

#######################
#
#   funчуo getip
#   pega o endereчo de IP do usuсrio
#
#######################

function getIp() {
	if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
		return $_SERVER['HTTP_CLIENT_IP'];
	}

	else if (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
		return $_SERVER['HTTP_X_FORWARDED_FOR'];
	}

	else {
		return $_SERVER['REMOTE_ADDR'];
	}
}

############################
#
#    nome: getBrowser (Pega o browser)
#   descriчуo: identifica qual o browser que esta sendo usado pelo usuсrio
#
#	$version = trazer a versуo do browser junto?
#
###########################
function getBrowser($version = true) {
	if (strpos(strtolower($_SERVER["HTTP_USER_AGENT"]), "googlebot") !== false) {
        $browser = "Googlebot";
    }
	
	elseif (strpos($_SERVER["HTTP_USER_AGENT"], "AhrefsBot") !== false) {
        $browser = "AhrefsBot";
    }
	
	elseif (strpos($_SERVER["HTTP_USER_AGENT"], "bingbot") !== false) {
        $browser = "BingBot";
    }
	
	elseif (strpos($_SERVER["HTTP_USER_AGENT"], "facebookexternalhit") !== false) {
        $browser = "Citaчуo no Facebook";
    }
	
    elseif (strpos($_SERVER["HTTP_USER_AGENT"], "Gecko")) {
        if (strpos($_SERVER["HTTP_USER_AGENT"], "Netscape") !== false) {
			if ($version == true) {
				$browser = $_SERVER["HTTP_USER_AGENT"];
			} else {
				$browser = "Netscape";
			}
        }
				
        elseif (strpos($_SERVER["HTTP_USER_AGENT"], "Firefox") !== false) {
			$start = strpos($_SERVER["HTTP_USER_AGENT"], "Firefox");
			$length = strpos(substr($_SERVER["HTTP_USER_AGENT"], $start + 8), ".");
			$version = substr($_SERVER["HTTP_USER_AGENT"], $start + 8, $length);
			if ($version >= 11) {
				if ($version == true) {
					$browser = "Aurora Firefox v.".$version;
				} else {
					$browser = "Aurora Firefox";
				}
			}
			
			else {
				if ($version == true) {
					$browser = "Mozilla Firefox v.".$version;
				} else {
					$browser = "Mozilla Firefox";
				}
			}
        }
       
        elseif (strpos($_SERVER["HTTP_USER_AGENT"], "Chrome") !== false) {
			if ($version == true) {
				$start = strpos($_SERVER["HTTP_USER_AGENT"], "Chrome");
				$length = strpos(substr($_SERVER["HTTP_USER_AGENT"], $start + 7), ".");
				$version = substr($_SERVER["HTTP_USER_AGENT"], $start + 7, $length);
				$browser = "Google Chrome v.".$version;
			} else {
				$browser = "Google Chrome";
			}
        }
       
        elseif (strpos($_SERVER["HTTP_USER_AGENT"], "Apple") !== false AND strpos($_SERVER["HTTP_USER_AGENT"], "Safari") !== false) {
            if ($version == true) {
				$start = strpos($_SERVER["HTTP_USER_AGENT"], "Version");
				$length = strpos(substr($_SERVER["HTTP_USER_AGENT"], $start + 8), ".");
				$version = substr($_SERVER["HTTP_USER_AGENT"], $start + 8, $length);
				$browser = "Apple Safari v.".$version;
			} else {
				$browser = "Apple Safari";
			}
        }
       
        else {
            $browser = $_SERVER["HTTP_USER_AGENT"];
        }
    }

    elseif (strpos($_SERVER["HTTP_USER_AGENT"], "MSIE") !== false) {
		if ($version == true) {
			$start = strpos($_SERVER["HTTP_USER_AGENT"], "MSIE");
			$length = strpos(substr($_SERVER["HTTP_USER_AGENT"], $start + 5), ".");
			$version = substr($_SERVER["HTTP_USER_AGENT"], $start + 5, $length);
			$browser = "Internet Explorer v.".$version;
		} else {
			$browser = "Internet Explorer";
		}
    }

    elseif (strpos($_SERVER["HTTP_USER_AGENT"], "Opera") !== false) {
		if ($version == true) {
			$start = strpos($_SERVER["HTTP_USER_AGENT"], "Version");
			$length = strpos(substr($_SERVER["HTTP_USER_AGENT"], $start + 8), ".");
			$version = substr($_SERVER["HTTP_USER_AGENT"], $start + 8, $length);
			$browser = "Opera v.".$version;

		} else {
			$browser = "Opera";
		}
    }
	
	elseif (strpos($_SERVER["HTTP_USER_AGENT"], "NetFront") !== false) {
		if ($version == true) {
			$start = strpos($_SERVER["HTTP_USER_AGENT"], "NetFront");
			$length = strpos(substr($_SERVER["HTTP_USER_AGENT"], $start + 9), ".");
			$version = substr($_SERVER["HTTP_USER_AGENT"], $start + 9, $length);
			$browser = "NetFront v.".$version;
		} else {
			$browser = "NetFront";
		}
    }

	elseif (strpos($_SERVER["HTTP_USER_AGENT"], "Android") !== false) {
		if ($version == true) {
			$browser = $_SERVER["HTTP_USER_AGENT"];
		} else {
			$browser = "Android Webkit";
		}
    }
	
	elseif (strpos($_SERVER["HTTP_USER_AGENT"], "BingPreview") !== false) {
	if ($version == true) {
			$start = strpos($_SERVER["HTTP_USER_AGENT"], "BingPreview");
			$length = strpos(substr($_SERVER["HTTP_USER_AGENT"], $start + 12), ".");
			$version = substr($_SERVER["HTTP_USER_AGENT"], $start + 12, $length);
			$browser = "Bing v.".$version;
		} else {
			$browser = "Bing";
		}
    }
		
    else {
        $browser = $_SERVER["HTTP_USER_AGENT"];
    }
	
    return $browser;
}

############################
#
#	nome: getSystem (Pega o Sistema Operacional)
#   descriчуo: identifica qual o sistema operacional que esta sendo usado pelo usuсrio
#
###########################
function getSystem(){
	$useragent = $_SERVER['HTTP_USER_AGENT'];
	$useragent = strtolower($useragent);

	if(strpos("$useragent", "windows nt 5.1") !== false) {
		return "Windows XP";
	}

	elseif (strpos("$useragent", "windows nt 6.0") !== false) {
		return "Windows Vista";
	}

	elseif (strpos("$useragent", "windows nt 6.1") !== false) {
		return "Windows 7";
	}

	elseif (strpos("$useragent", "windows 98") !== false) {
		return "Windows 98";
	}

	elseif (strpos("$useragent", "windows nt 5.0") !== false) {
		return "Windows 2000";
	}

	elseif (strpos("$useragent", "windows nt 5.2") !== false) {
		return "Windows 2003 server";
	}

	elseif (strpos("$useragent", "windows nt 6.0") !== false) {
		return "Windows Vista";
	}

	elseif (strpos("$useragent", "windows nt") !== false) {
		return "Windows NT";
	}

	elseif (strpos("$useragent", "win 9x 4.90") !== false && strpos("$useragent","win me")) {
		return "Windows ME";
	}
	elseif (strpos("$useragent", "win ce") !== false) {
		return "Windows CE";
	}

	elseif (strpos("$useragent", "win 9x 4.90") !== false) {
		return "Windows ME";
	}

	elseif (strpos("$useragent", "iphone") !== false) {
		return "iPhone";
	}

	elseif (strpos("$useragent", "mac os x") !== false) {
		return "Mac OS X";
	}

	elseif (strpos("$useragent", "macintosh") !== false) {
		return "Macintosh";
	}

	elseif (strpos("$useragent", "linux") !== false) {
		return "Linux";
	}
	
	elseif (strpos("$useragent", "freebsd") !== false) {
		return "Free BSD";
	}
	
	elseif (strpos("$useragent", "symbian") !== false) {
		return "Symbian";
	}

	elseif (strpos("$useragent", "samsung") !== false) {
		return "Samsung";
	}
	
	elseif (strpos("$useragent", "nokia") !== false) {
		return "Nokia";
	}
	
	elseif (strpos("$useragent", "googlebot") !== false OR strpos("$useragent", "mediapartners-google") !== false) {
		return "GoogleBot";
	}
	
	elseif (strpos("$useragent", "ahrefsbot") !== false) {
		return "AhrefsBot";
	}
	
	elseif (strpos("$useragent", "bingbot") !== false) {
        return "BingBot";
    }
	
	else {
		return $_SERVER["HTTP_USER_AGENT"];
	}
}
?>