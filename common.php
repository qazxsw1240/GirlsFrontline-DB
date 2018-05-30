<?php
function fairytype_to_str($type) {
	if($type == 'strategy') {
		return '전략요정';
	}
	else if($type == 'battle') {
		return '전투요정';
	}
}
function gunrank_to_img($rank) {
	$result = "";
	for($i = 1 ; $i<= $rank ; $i++) {
		$result .= '<img style="width:2vh" src="img/rank.png">';
	}
	return $result;
}
function guntype_to_str($type) {
	$type = strtolower($type);
	switch($type) {
		case 'ar': return "돌격소총";
		case 'rf': return "소총";
		case 'smg': return "기관단총";
		case 'mg': return "기관총";
		case 'sg': return "샷건";
		case 'hg': return "권총";
	}
}
function getcharimgdir_fairy($str, $emo) {
	if($str == "DJMAXSUEE") {
		switch($emo) {
			case 0: return "fairy/djmaxsuee_1"; break;
		}
	}
	else if($str == "DJMAXSEHRA") {
		switch($emo) {
			case 0: return "fairy/djmaxsehra_1"; break;
		}
	}
	else if($str == "DJMAXPREIYA") {
		switch($emo) {
			case 0: return "fairy/djmaxpreiya_1"; break;
		}
	}
}
function getcharimgdir($str, $emo) {
	$dolls = json_decode(file_get_contents("data/doll.json"));
	if($str == "FAL") $str = "FNFAL";
	if($str == "MK2") $str = "StenMK2";
	if($str == "에이전트") $str = "BOSS-8";
	if($str == "RO") { $str = "RO635"; $emo = "0"; }
	
	
	
	foreach($dolls as $doll) {
		if($emo == "") return "invisible";
		
		if(strtoupper($doll->name) == strtoupper($str)) {
			$result = $doll->id;
			
			if($doll->id > 20000) {
				$result = $result - 20000 . "_U";
			}
			
			if($emo == 0) {
				$result = "dolls/" . $result;
			}
			
			if($str == "G11") {
				switch($emo) {
					case 1: $result = "dolls/" . $result . "_D"; break;
					case 2: $result = "story_character/pic_G11_1"; break;
					case 3: $result = "story_character/pic_G11_2"; break;
					case 4: $result = "dolls/" . $result . "_1"; break;
					case 5: $result = "dolls/" . $result . "_1_D"; break;
					case 6: $result = "dolls/" . $result . "_2"; break;
					case 7: $result = "dolls/" . $result . "_2_D"; break;
					case 8: $result = "dolls/" . $result . "_3"; break;
					case 9: $result = "dolls/" . $result . "_3_D"; break;
				}
			}
			else if($str == "SV98") {
				switch($emo) {
					case 1: $result = "dolls/" . $result . "_D"; break;
					case 2: $result = "dolls/" . $result . "_2"; break;
					case 3: $result = "dolls/" . $result . "_2_D"; break;
					case 4: $result = "dolls/" . $result . "_1"; break;
					case 5: $result = "dolls/" . $result . "_1_D"; break;
					case 6: $result = "dolls/" . $result . "_3"; break;
					case 7: $result = "dolls/" . $result . "_3_D"; break;
				}
			}
			else if($str == "56-1type") {
				switch($emo) {
					case 1: $result = "dolls/" . $result . "_D"; break;
					case 2: $result = "dolls/" . $result . "_2"; break;
					case 3: $result = "dolls/" . $result . "_2_D"; break;
					case 4: $result = "dolls/" . $result . "_1"; break;
					case 5: $result = "dolls/" . $result . "_1_D"; break;
					case 6: $result = "dolls/" . $result . "_3"; break;
					case 7: $result = "dolls/" . $result . "_3_D"; break;
				}
			}
			else if($str == "MP5") {
				switch($emo) {
					case 1: $result = "dolls/" . $result . "_D"; break;
					case 2: $result = "dolls/" . $result . "_1"; break;
					case 3: $result = "dolls/" . $result . "_1_D"; break;
					case 4: $result = "dolls/" . $result . "_3"; break;
					case 5: $result = "dolls/" . $result . "_3_D"; break;
					case 6: $result = "dolls/" . $result . "_2"; break;
					case 7: $result = "dolls/" . $result . "_2_D"; break;
				}
			}
			else if($str == "FN57") {
				switch($emo) {
					case 1: $result = "dolls/" . $result . "_D"; break;
					case 2: $result = "dolls/" . $result . "_2"; break;
					case 3: $result = "dolls/" . $result . "_2_D"; break;
					case 4: $result = "dolls/" . $result . "_1"; break;
					case 5: $result = "dolls/" . $result . "_1_D"; break;
					case 6: $result = "dolls/" . $result . "_3"; break;
					case 7: $result = "dolls/" . $result . "_3_D"; break;
				}
			}
			else if($str == "G36") {
				switch($emo) {
					case 1: $result = "dolls/" . $result . "_D"; break;
					case 2: $result = "dolls/" . $result . "_2"; break;
					case 3: $result = "dolls/" . $result . "_2_D"; break;
					case 4: $result = "dolls/" . $result . "_1"; break;
					case 5: $result = "dolls/" . $result . "_1_D"; break;
					case 6: $result = "dolls/" . $result . "_3"; break;
					case 7: $result = "dolls/" . $result . "_3_D"; break;
				}
			}
			else if($str == "M1903") {
				switch($emo) {
					case 1: $result = "dolls/" . $result . "_D"; break;
					case 2: $result = "dolls/" . $result . "_2"; break;
					case 3: $result = "dolls/" . $result . "_2_D"; break;
					case 4: $result = "dolls/" . $result . "_1"; break;
					case 5: $result = "dolls/" . $result . "_1_D"; break;
					case 6: $result = "dolls/" . $result . "_3"; break;
					case 7: $result = "dolls/" . $result . "_3_D"; break;
				}
			}
			else if($str == "WA2000") {
				switch($emo) {
					case 1: $result = "dolls/" . $result . "_D"; break;
					case 2: $result = "dolls/" . $result . "_2"; break;
					case 3: $result = "dolls/" . $result . "_2_D"; break;
					case 4: $result = "dolls/" . $result . "_1"; break;
					case 5: $result = "dolls/" . $result . "_1_D"; break;
					case 6: $result = "dolls/" . $result . "_3"; break;
					case 7: $result = "dolls/" . $result . "_3_D"; break;
				}
			}
			else if($str == "HK416") {
				switch($emo) {
					case 1: $result = "dolls/" . $result . "_D"; break;
					case 2: $result = "story_character/pic_HK416_1"; break;
					case 3: $result = "story_character/pic_HK416_2"; break;
					case 4: $result = "dolls/" . $result . "_1"; break;
					case 5: $result = "dolls/" . $result . "_1_D"; break;
					case 6: $result = "dolls/" . $result . "_2"; break;
					case 7: $result = "dolls/" . $result . "_2_D"; break;
					case 8: $result = "dolls/" . $result . "_3"; break;
					case 9: $result = "dolls/" . $result . "_3_D"; break;
				}
			}
			else if($str == "M4A1") {
				switch($emo) {
					case 1: $result = "dolls/" . $result . "_D"; break;
					case 2: $result = "story_character/M4A1_SAD"; break;
					case 3: $result = "story_character/M4A1_T"; break;
					case 4: $result = "dolls/" . $result . "_1"; break;
					case 5: $result = "dolls/" . $result . "_1_D"; break;
					case 6: $result = "dolls/" . $result . "_2"; break;
					case 7: $result = "dolls/" . $result . "_2_D"; break;
					case 8: $result = "dolls/" . $result . "_3"; break;
					case 9: $result = "dolls/" . $result . "_3_D"; break;
				}
			}
			else if($str == "UMP9") {
				switch($emo) {
					case 1: $result = "dolls/" . $result . "_D"; break;
					case 2: $result = "story_character/pic_UMP9_1"; break;
					case 3: $result = "story_character/pic_UMP9_2"; break;
					case 4: $result = "story_character/pic_UMP9_3"; break;
					case 5: $result = "dolls/" . $result . "_1"; break;
					case 6: $result = "dolls/" . $result . "_1_D"; break;
					case 7: $result = "dolls/" . $result . "_2"; break;
					case 8: $result = "dolls/" . $result . "_2_D"; break;
					case 9: $result = "dolls/" . $result . "_3"; break;
					case 10: $result = "dolls/" . $result . "_3_D"; break;
				}
			}
			else if($str == "UMP40") {
				switch($emo) {
					case 1: $result = "dolls/" . $result . "_D"; break;
					case 2: $result = "story_character/pic_UMP40_angry"; break;
					case 3: $result = "story_character/pic_UMP40_lol"; break;
					case 4: $result = "story_character/pic_UMP40_sad"; break;
					case 5: $result = "story_character/pic_UMP40_smile"; break;
					case 6: $result = "dolls/" . $result . "_1"; break;
					case 7: $result = "dolls/" . $result . "_1_D"; break;
					case 8: $result = "dolls/" . $result . "_2"; break;
					case 9: $result = "dolls/" . $result . "_2_D"; break;
					case 10: $result = "dolls/" . $result . "_3"; break;
					case 11: $result = "dolls/" . $result . "_3_D"; break;
				}
			}
			else if($str == "UMP45") {
				switch($emo) {
					case 1: $result = "dolls/" . $result . "_D"; break;
					case 2: $result = "story_character/pic_UMP45_1"; break;
					case 3: $result = "story_character/pic_UMP45_2"; break;
					case 4: $result = "dolls/" . $result . "_1"; break;
					case 5: $result = "dolls/" . $result . "_1_D"; break;
					case 6: $result = "dolls/" . $result . "_2"; break;
					case 7: $result = "dolls/" . $result . "_2_D"; break;
					case 8: $result = "dolls/" . $result . "_3"; break;
					case 9: $result = "dolls/" . $result . "_3_D"; break;
				}
			}
			else if($str == "RO635") {
				switch($emo) {
					case 1: $result = "dolls/" . $result . "_D"; break;
					case 2: $result = "story_character/pic_RO635_1"; break;
					case 3: $result = "story_character/pic_RO635_2"; break;
					case 4: $result = "story_character/pic_RO635_3"; break;
					case 5: $result = "story_character/pic_RO635_4"; break;
					case 6: $result = "dolls/" . $result . "_1"; break;
					case 7: $result = "dolls/" . $result . "_1_D"; break;
					case 8: $result = "dolls/" . $result . "_2"; break;
					case 9: $result = "dolls/" . $result . "_2_D"; break;
					case 10: $result = "dolls/" . $result . "_3"; break;
					case 11: $result = "dolls/" . $result . "_3_D"; break;
				}
			}
			else if($str == "AR15") {
				switch($emo) {
					case 1: $result = "dolls/" . $result . "_D"; break;
					case 2: $result = "story_character/AR15_T"; break;
					case 3: $result = "dolls/" . $result . "_1"; break;
					case 4: $result = "dolls/" . $result . "_1_D"; break;
					case 5: $result = "dolls/" . $result . "_2"; break;
					case 6: $result = "dolls/" . $result . "_2_D"; break;
					case 7: $result = "dolls/" . $result . "_3"; break;
					case 8: $result = "dolls/" . $result . "_3_D"; break;
				}
			}
			else if($str == "M1918") {
				switch($emo) {
					case 1: $result = "dolls/" . $result . "_D"; break;
					case 2: $result = "dolls/" . $result . "_2"; break;
					case 3: $result = "dolls/" . $result . "_2_D"; break;
					case 4: $result = "dolls/" . $result . "_1"; break;
					case 5: $result = "dolls/" . $result . "_1_D"; break;
					case 6: $result = "dolls/" . $result . "_3"; break;
					case 7: $result = "dolls/" . $result . "_3_D"; break;
					case 8: $result = "dolls/" . $result . "_4"; break;
					case 9: $result = "dolls/" . $result . "_4_D"; break;				}
			}
			else {
				switch($emo) {
					case 1: $result = "dolls/" . $result . "_D"; break;
					case 2: $result = "dolls/" . $result . "_1"; break;
					case 3: $result = "dolls/" . $result . "_1_D"; break;
					case 4: $result = "dolls/" . $result . "_2"; break;
					case 5: $result = "dolls/" . $result . "_2_D"; break;
					case 6: $result = "dolls/" . $result . "_3"; break;
					case 7: $result = "dolls/" . $result . "_3_D"; break;
					case 8: $result = "dolls/" . $result . "_4"; break;
					case 9: $result = "dolls/" . $result . "_4_D"; break;
				}
			}
			
			return $result;
		}
	}
	if($str == "M16") {
		switch($emo) {
			case 0: $result = "dolls/54"; break;
			case 1: $result = "dolls/54_D"; break;
			case 2: $result = "story_character/M16A1_SAD"; break;
			case 3: $result = "story_character/M16A1_T"; break;
			case 4: $result = "dolls/" . $result . "_1"; break;
			case 5: $result = "dolls/" . $result . "_1_D"; break;
			case 6: $result = "dolls/" . $result . "_2"; break;
			case 7: $result = "dolls/" . $result . "_2_D"; break;
			case 8: $result = "dolls/" . $result . "_3"; break;
			case 9: $result = "dolls/" . $result . "_3_D"; break;
		}
	}
	else if($str == "SOPII") {
		switch($emo) {
			case 0: $result = "dolls/56"; break;
			case 1: $result = "dolls/56_D"; break;
			case 2: $result = "story_character/SOPII_SAD"; break;
			case 3: $result = "story_character/SOPII_T"; break;
			case 4: $result = "dolls/56_1"; break;
			case 5: $result = "dolls/56_1_D"; break;
			case 6: $result = "dolls/56_2"; break;
			case 7: $result = "dolls/56_2_D"; break;
			case 8: $result = "dolls/56_3"; break;
			case 9: $result = "dolls/56_3_D"; break;
		}
	}
	else if($str == "UMP45_Young") {
		switch($emo) {
			case 0: $result = "story_character/UMP45-Young"; break;
			case 1: $result = "story_character/UMP45-Young_angry"; break;
			case 2: $result = "story_character/UMP45-Young_sad"; break;
			case 3: $result = "story_character/UMP45-Young_serious"; break;
		}
	}
	else if($str == "NPC-Kalin") {
		switch($emo) {
			case 0: return "story_character/版娘"; break;
			case 1: return "story_character/版娘-1"; break;
			case 2: return "story_character/版娘-2"; break;
			case 3: return "story_character/版娘-3"; break;
			case 4: return "story_character/版娘-4"; break;
			case 5: return "story_character/版娘-5"; break;
			case 6: return "story_character/版娘-6"; break;
			case 7: return "story_character/版娘-7"; break;
		}
	}
	else if($str == "NPC-Ange") {
		switch($emo) {
			case 0: return "story_character/npc/NPC-Ange"; break;
		}
	}
	else if($str == "NPC-Yegor") {
		switch($emo) {
			case 0: return "story_character/npc/NPC-Yegor"; break;
			case 1: return "story_character/npc/NPC-YegorArm"; break;
			case 2: return "story_character/npc/NPC-YegorArm2"; break;
			case 3: return "story_character/npc/NPC-YegorArm3"; break;
		}
	}
	else if($str == "NPC-Carter") {
		switch($emo) {
			case 0: return "story_character/npc/pic_NPC-Carter"; break;
		}
	}
	else if($str == "NPC-Helian") {
		switch($emo) {
			case 0: return "story_character/npc/pic_NPC-Helian"; break;
			case 1: return "story_character/npc/pic_NPC-Helian_A"; break;
			case 2: return "story_character/npc/pic_NPC-Helian_F"; break;
			case 3: return "story_character/npc/pic_NPC-Helian_T"; break;
		}
	}
	else if($str == "NPC-Kyruger") {
		switch($emo) {
			case 0: return "story_character/npc/pic_NPC-Kyruger"; break;
		}
	}
	else if($str == "NPC-Lyco") {
		switch($emo) {
			case 0: return "story_character/npc/NPC-Lyco"; break;
		}
	}
	else if($str == "NPC-Persica") {
		switch($emo) {
			case 0: return "story_character/npc/pic_NPC-Persica"; break;
			case 1: return "story_character/npc/pic_NPC-Persica_C"; break;
			case 2: return "story_character/npc/pic_NPC-Persica_J"; break;
			case 3: return "story_character/npc/pic_NPC-Persica_T"; break;
		}
	}
	else if($str == "NPC-Havel") {
		switch($emo) {
			case 0: return "story_character/npc/NPC-Havel"; break;
		}
	}
	else if($str == "NPC-Seele") {
		switch($emo) {
			case 0: return "story_character/npc/pic_NPC-Seele"; break;
		}
	}
	else if($str == "NPC-Deele") {
		switch($emo) {
			case 0: return "story_character/npc/pic_NPC-Deele"; break;
		}
	}
	
	
	else if($str == "BOSS-1") {
		switch($emo) {
			case 0: return "story_character/boss/Scarecrow"; break;
		}
	}
	else if($str == "BOSS-2" || $str == "엑스큐셔너") {
		switch($emo) {
			case 0: return "story_character/boss/Excutioner"; break;
		}
	}
	else if($str == "BOSS-3") {
		switch($emo) {
			case 0: return "story_character/boss/Hunter"; break;
		}
	}
	else if($str == "BOSS-4") {
		switch($emo) {
			case 0: return "story_character/boss/Intruder"; break;
		}
	}
	else if($str == "BOSS-5") {
		switch($emo) {
			case 0: return "story_character/BOSS-6"; break;
		}
	}
	else if($str == "BOSS-6") {
		switch($emo) {
			case 0: return "story_character/boss/Destroyer"; break;
		}
	}
	else if($str == "BOSS-7") {
		switch($emo) {
			case 0: return "story_character/BOSS-7"; break;
		}
	}
	else if($str == "BOSS-8") {
		switch($emo) {
			case 0: return "story_character/BOSS-8"; break;
		}
	}
	else if($str == "BOSS-9") {
		switch($emo) {
			case 0: return "story_character/BOSS-9"; break;
		}
	}
	else if($str == "BOSS-10") {
		switch($emo) {
			case 0: return "story_character/BOSS-10"; break;
		}
	}
	else if($str == "BOSS-11") {
		switch($emo) {
			case 0: return "story_character/BOSS-11"; break;
		}
	}	
	
	else if($str == "BossJustice") {
		switch($emo) {
			case 0: return "story_character/boss/BossJustice"; break;
		}
	}
	else if($str == "BossCerberus") {
		switch($emo) {
			case 0: return "story_character/boss/Cerberus"; break;
		}
	}
	else if($str == "ExcutionerElite") {
		switch($emo) {
			case 0: return "story_character/boss/ExcutionerElite"; break;
			case 1: return "story_character/boss/ExcutionerElite_2"; break;
		}
	}
	else if($str == "BossDestroyerPlus") {
		switch($emo) {
			case 0: return "story_character/boss/DestroyerPlus"; break;
		}
	}
	else if($str == "HunterElite") {
		switch($emo) {
			case 0: return "story_character/boss/HunterElite"; break;
			case 1: return "story_character/boss/HunterElite_1"; break;
		}
	}
	else if($str == "Weaver") {
		switch($emo) {
			case 0: return "story_character/boss/Weaver"; break;
			case 1: return "story_character/boss/Weaver_2"; break;
			case 2: return "story_character/boss/Weaver_3"; break;
		}
	}
	else if($str == "WeaverElite") {
		switch($emo) {
			case 0: return "story_character/boss/WeaverElite"; break;
			case 1: return "story_character/boss/WeaverElite_1"; break;
			case 2: return "story_character/boss/WeaverElite_2"; break;
			case 3: return "story_character/boss/WeaverElite_3"; break;
			case 4: return "story_character/boss/WeaverElite_4"; break;
		}
	}
	else if($str == "M1903Cafe") {
		switch($emo) {
			case 0: return "story_character/春田咖啡"; break;
		}
	}
	
	return $result;
}
?>