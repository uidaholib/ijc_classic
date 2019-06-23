<?php

function movieSwitcherIJC() {
	$ijc_movies = array("1", "2", "3", "4", "5");
	$rand_key = array_rand($ijc_movies, 2);
	echo "<script language=\"JavaScript\" type=\"text/javascript\">\n
                        <!--\n
                        var hasReqestedVersion = DetectFlashVer(requiredMajorVersion, requiredMinorVersion, requiredRevision);\n
                        \n
                        if (hasReqestedVersion) {\n
                            AC_FL_RunContent(\n
                                        \"src\", \"movies/IJC_collage_0".$ijc_movies[$rand_key[0]]."\",\n
                                        \"width\", \"671\",\n
                                        \"height\", \"315\",\n
                                        \"title\", \"IJC International Jazz Collections\",\n
                                        \"quality\", \"high\",\n
                                        \"bgcolor\", \"#cccccc\",\n
										\"wmode\", \"transparent\",\n
                                        \"type\", \"application/x-shockwave-flash\",\n
                                        'codebase', 'http://fpdownload.macromedia.com/get/flashplayer/current/swflash.cab',\n
                                        \"pluginspage\", \"http://www.adobe.com/go/getflashplayer\"\n
                            );\n
                        } else {  \n
                            var alternateContent = '<img src=\"/images/IJC_flash".$ijc_movies[$rand_key[0]]."_01.jpg\" width=\"671\" height=\"315\" alt=\"IJC - International Jazz Collections\" />'\n
                            document.write(alternateContent);  \n
                        }\n
                        // -->\n
                        </script>  \n                 
                        <noscript>\n
                            <img src=\"/images/IJC_flash".$ijc_movies[$rand_key[0]]."_01.jpg\" width=\"671\" height=\"315\" alt=\"IJC - International Jazz Collections\" />                    \n
                   	  </noscript>\n";
					  }

function movieSwitcherLFeather() {
	$feather_movies = array("1", "2", "3", "4");
	$feather_rand_key = array_rand($feather_movies, 2);
	echo "<script language=\"JavaScript\" type=\"text/javascript\">\n
                        <!--\n
                        var hasReqestedVersion = DetectFlashVer(requiredMajorVersion, requiredMinorVersion, requiredRevision);\n
                        \n
                        if (hasReqestedVersion) {\n
                            AC_FL_RunContent(\n
                                        \"src\", \"../movies/IJC_LFeather_collage_0".$feather_movies[$feather_rand_key[0]]."\",\n
                                        \"width\", \"671\",\n
                                        \"height\", \"315\",\n
                                        \"title\", \"Leonard Feather Collection, IJC\",\n
                                        \"quality\", \"high\",\n
                                        \"bgcolor\", \"#cccccc\",\n
										\"wmode\", \"transparent\",\n
                                        \"type\", \"application/x-shockwave-flash\",\n
                                        'codebase', 'http://fpdownload.macromedia.com/get/flashplayer/current/swflash.cab',\n
                                        \"pluginspage\", \"http://www.adobe.com/go/getflashplayer\"\n
                            );\n
                        } else {  \n
                            var alternateContent = '<img src=\"/images/IJC_LFeather_coll_0".$feather_movies[$feather_rand_key[0]]."-01.jpg\" width=\"671\" height=\"315\" alt=\"Leonard Feather Collection, IJC\" />'\n
                            document.write(alternateContent);  \n
                        }\n
                        // -->\n
                        </script>  \n                 
                        <noscript>\n
                            <img src=\"/images/IJC_LFeather_coll_0".$feather_movies[$feather_rand_key[0]]."-01.jpg\" width=\"671\" height=\"315\" alt=\"Leonard Feather Collection, IJC\" />                    \n
                   	  </noscript>\n";
					  }

function movieSwitcherLMorse() {
	$ijc_movies = array("1", "2");
	$rand_key = array_rand($ijc_movies, 2);
	echo "<script language=\"JavaScript\" type=\"text/javascript\">\n
                        <!--\n
                        var hasReqestedVersion = DetectFlashVer(requiredMajorVersion, requiredMinorVersion, requiredRevision);\n
                        \n
                        if (hasReqestedVersion) {\n
                            AC_FL_RunContent(\n
                                        \"src\", \"../movies/IJC_LMorse_collage_0".$ijc_movies[$rand_key[0]]."\",\n
                                        \"width\", \"671\",\n
                                        \"height\", \"315\",\n
                                        \"title\", \"Lee Morse Collection, IJC\",\n
                                        \"quality\", \"high\",\n
                                        \"bgcolor\", \"#cccccc\",\n
										\"wmode\", \"transparent\",\n
                                        \"type\", \"application/x-shockwave-flash\",\n
                                        'codebase', 'http://fpdownload.macromedia.com/get/flashplayer/current/swflash.cab',\n
                                        \"pluginspage\", \"http://www.adobe.com/go/getflashplayer\"\n
                            );\n
                        } else {  \n
                            var alternateContent = '<img src=\"/images/IJC_LMorse_coll_0".$ijc_movies[$rand_key[0]]."-01.jpg\" width=\"671\" height=\"315\" alt=\"Lee Morse Collection, IJC\" />'\n
                            document.write(alternateContent);  \n
                        }\n
                        // -->\n
                        </script>  \n                 
                        <noscript>\n
                            <img src=\"/images/IJC_LMorse_coll_0".$ijc_movies[$rand_key[0]]."-01.jpg\" width=\"671\" height=\"315\" alt=\"Lee Morse Collection, IJC\" />                    \n
                   	  </noscript>\n";
					  }

function movieSwitcherAGrey() {
	$ijc_movies = array("1", "2");
	$rand_key = array_rand($ijc_movies, 2);
	echo "<script language=\"JavaScript\" type=\"text/javascript\">\n
                        <!--\n
                        var hasReqestedVersion = DetectFlashVer(requiredMajorVersion, requiredMinorVersion, requiredRevision);\n
                        \n
                        if (hasReqestedVersion) {\n
                            AC_FL_RunContent(\n
                                        \"src\", \"../movies/IJC_AGrey_collage_0".$ijc_movies[$rand_key[0]]."\",\n
                                        \"width\", \"671\",\n
                                        \"height\", \"315\",\n
                                        \"title\", \"Al Grey/Rosalie Soladar Memorial Collection, IJC\",\n
                                        \"quality\", \"high\",\n
                                        \"bgcolor\", \"#cccccc\",\n
										\"wmode\", \"transparent\",\n
                                        \"type\", \"application/x-shockwave-flash\",\n
                                        'codebase', 'http://fpdownload.macromedia.com/get/flashplayer/current/swflash.cab',\n
                                        \"pluginspage\", \"http://www.adobe.com/go/getflashplayer\"\n
                            );\n
                        } else {  \n
                            var alternateContent = '<img src=\"/images/IJC_AGrey_coll_0".$ijc_movies[$rand_key[0]]."-01.jpg\" width=\"671\" height=\"315\" alt=\"Al Grey/Rosalie Soladar Memorial Collection, IJC\" />'\n
                            document.write(alternateContent);  \n
                        }\n
                        // -->\n
                        </script>  \n                 
                        <noscript>\n
                            <img src=\"/images/IJC_AGrey_coll_0".$ijc_movies[$rand_key[0]]."-01.jpg\" width=\"671\" height=\"315\" alt=\"Al Grey/Rosalie Soladar Memorial Collection, IJC\" />                    \n
                   	  </noscript>\n";
					  }

					  function movieSwitcherLHampton() {
	$ijc_movies = array("1", "2", "3", "4");
	$rand_key = array_rand($ijc_movies, 2);
	echo "<script language=\"JavaScript\" type=\"text/javascript\">\n
                        <!--\n
                        var hasReqestedVersion = DetectFlashVer(requiredMajorVersion, requiredMinorVersion, requiredRevision);\n
                        \n
                        if (hasReqestedVersion) {\n
                            AC_FL_RunContent(\n
                                        \"src\", \"/hampton_collection/images/hampton_library0".$ijc_movies[$rand_key[0]]."\",\n
                                        \"width\", \"671\",\n
                                        \"height\", \"315\",\n
                                        \"title\", \"Lionel Hampton Library Collection, IJC\",\n
                                        \"quality\", \"high\",\n
                                        \"bgcolor\", \"#cccccc\",\n
										\"wmode\", \"transparent\",\n
                                        \"type\", \"application/x-shockwave-flash\",\n
                                        'codebase', 'http://fpdownload.macromedia.com/get/flashplayer/current/swflash.cab',\n
                                        \"pluginspage\", \"http://www.adobe.com/go/getflashplayer\"\n
                            );\n
                        } else {  \n
                            var alternateContent = '<img src=\"/hampton_collection//images/Hampton_Library_sketch_0".$ijc_movies[$rand_key[0]].".jpg\" width=\"671\" height=\"315\" alt=\"Lionel Hampton Library Collection, IJC\" />'\n
                            document.write(alternateContent);  \n
                        }\n
                        // -->\n
                        </script>  \n                 
                        <noscript>\n
                            <img src=\"/hampton_collection/images/Hampton_Library_sketch_0".$ijc_movies[$rand_key[0]].".jpg\" width=\"671\" height=\"315\" alt=\"Lionel Hampton Library Collection, IJC\" />                    \n
                   	  </noscript>\n";
					  }

?>                        
