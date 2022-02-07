<?php
function myCarousel(string $orden = "all", String $data="", Array $ordenArray=[]){
	if($orden == "myCarousel"){
		$myCarousel = json_decode($data, true)["myCarousel"];
		$dataTarget = $myCarousel["dataTarget"];
		$dataSlideTo = $myCarousel["dataSlideTo"];
	}elseif($orden == "item"){
		$item = json_decode($data, true)["item"];
		$divClassItem = $item["divClassItem"];
		$imgStyle = $item["imgStyle"];
		$divCaption = $item["divCaption"];
		$divCaptionP = $item["divCaptionP"];
	}elseif($orden == "carouselIndicators"){
		$carouselIndicators = json_decode($data, true)["carouselIndicators"];
		$olClass = $carouselIndicators["olClass"];
		$liDataTargetId = json_decode($data, true)["myCarousel"]["dataTarget"];
		$liClass = $carouselIndicators["liClass"];
	}elseif($orden == "wrapperForSlides"){
		$wrapperForSlides = json_decode($data, true)["wrapperForSlides"];
		$divCarousel = $wrapperForSlides["divCarousel"];
		$divClassItem = $wrapperForSlides["divClassItem"];
		$imgDefSrc = $wrapperForSlides["imgDefSrc"];
		$imgAlt = $wrapperForSlides["imgAlt"];
		$imgstyle = $wrapperForSlides["imgStyle"];
		$divCaption = $wrapperForSlides["divCaption"];
		$divCaptionH3 = $wrapperForSlides["divCaptionH3"];
		$divCaptionP = $wrapperForSlides["divCaptionP"];
	}elseif($orden == "dataSlide"){
		if($data != ""){
			$ordenesCarousel = json_decode($data, true)["dataSlide"];	
		}elseif($ordenArray != []){
			$aClass = $ordenArray["aClass"];
			$aHref = $ordenArray["aHref"];
			$dataSlide = $ordenArray["dataSlide"];
			$spanClass = $ordenArray["spanClass"];
			$spanClassOnly = $ordenArray["spanClassOnly"];
			$spanInner = $ordenArray["spanInner"];
		}
	}
	
	if($orden == "myCarousel" || $orden == "item"){
		$indice = 1;
		$myCarousel = json_decode($data, true)["myCarousel"];
		$directorio = $myCarousel["directorio"];
		$fotografias  = scandir($directorio, 1);
		foreach($fotografias as $fotografia){
			if($fotografia != "." && $fotografia != ".."){
				if($orden == "myCarousel"){
					?>
					<li data-target="#<?php echo $dataTarget; ?>" data-slide-to="<?php echo $dataSlideTo; ?>"></li>
					<?php
					$dataSlideTo++;				
				}elseif($orden == "item"){
					?>
					<div class="<?php echo $divClassItem; ?>">
						<img src="<?php echo $directorio.$fotografia; ?>" alt="<?php echo $fotografia; ?>" style="<?php echo $imgStyle; ?>" >
						<div class="<?php echo $divCaption; ?>">
						<h3><?php // echo $fotografia; ?></h3>
						<p><?php // echo $divCaptionP; ?></p>
						</div>
					</div>
					<?php
				}	
			}
		}		
	}elseif($orden == "carouselIndicators"){
		?>
		<ol class="<?php echo $olClass; ?>">
		<li data-target="#<?php echo $liDataTargetId; ?>" data-slide-to="0" class="<?php echo $liClass; ?>"></li>
			<?php
			myCarousel("myCarousel", $data);
			?>
		</ol>
		<?php
	}elseif($orden == "wrapperForSlides"){
		?>	
		<div class="<?php echo $divCarousel; ?>">
			<div class="<?php echo $divClassItem; ?>">
				<img src="<?php echo $imgDefSrc; ?>" alt="<?php echo $imgAlt; ?>" style="<?php echo $imgstyle; ?>" >
				<div class="<?php echo $divCaption; ?>">
					<h3><?php // echo $divCaptionH3; ?></h3>
					<p><?php // echo $divCaptionP; ?></p>
				</div>
			</div>	
			<?php
			myCarousel("item", $data);
			?>
		</div>
		<?php
	}elseif($orden == "dataSlide"){
		if($data != ""){
			foreach($ordenesCarousel as $ordenArray){
				myCarousel($orden="dataSlide", $data="", $ordenArray);
			}
		}elseif($ordenArray != []){
			?>
			<a class="<?php echo $aClass; ?>" href="#<?php echo $aHref; ?>" data-slide="<?php echo $dataSlide; ?>">
				<span class="<?php echo $spanClass; ?>"></span>
				<span class="<?php echo $spanClassOnly; ?>"><?php echo $spanInner; ?></span>
			</a>
			<?php		
		}			
	}elseif($orden == "all"){
		$myCarousel = json_decode($data, true)["myCarousel"];
		$dataTarget = $myCarousel["dataTarget"];
		$classCarousel = $myCarousel["classCarousel"];
		$dataRide = $myCarousel["dataRide"];
		?>
		<div id="<?php echo $dataTarget; ?>" class="<?php echo $classCarousel; ?>" data-ride="<?php echo $dataRide; ?>">
		<?php
		// myCarousel("carouselIndicators", $data);
		myCarousel("wrapperForSlides", $data);
		myCarousel("dataSlide", $data);
		?>
		</div>
		<?php		
	}	
}
