<?php

/**
 * Model to Create PDF and uploaded
 */
class PDFcreate extends Eloquent
{
	/*
	$html => html string, this work just for mPDF library
	$optionsMpdf => this is an array options most set in 1 example:
		$optionsMpdf[0] = 1; if you want page size legal
		$optionsMpdf[1] = 1; if you want footer
	 	* Value reserver for footer $optionsMpdf[2]!!!!!!
		if $optionsMpdf[1] == 1 if you want a different option from default(Nexogy, '', Page {PAGENO}/{nb})
			$optionsMpdf[2] = 'left text, center text, right text'
			if right text is empty this will add the page number automatic
		$optionsMpdf[3] = 1; Change Text Size
	 	* Value reserver for Text Size $optionsMpdf[4]!!!!!!
	 	$optionsMpdf[4] = "10px";
	 	$optionsMpdf[5] = to add a extra pdf to file
	 	$optionsMpdf[6] = url to generate external PDF
	 	$optionsMpdf[7] = first page header added from new PDF
	 	$optionsMpdf[8] = Change margin to page = "1,2,3,4,5,6"
	$path => path of the view to put inside the html, or the URL. This just work for wkhtml2pdf.
	$name => PDF file name
	$viewValues => this is an array, this work just for wkhtml2pdf if the view require values to display some information
	*/
	public static function createPDF( $html, $optionsMpdf, $path, $name, $viewValues){
		$size_page = "LETTER";
		$letterSize = "16px";
		$setfooter = false;
		$left = "Loan System";
		$center = "";
		$right = "Page {PAGENO}/{nb}";
		if(count($optionsMpdf) > 0){
			$i = 0;
			while(isset($optionsMpdf[$i])){
				if($optionsMpdf[$i] == 1){
					switch($i){
						case "0":
							$size_page = "LEGAL";
						break;
						case "1":
							$setfooter = true;
							$i++;
							if(isset($optionsMpdf[$i])){
								$footerText = explode(",", $optionsMpdf[$i]);
								if(count($footerText) > 0){
									$f = 0;
									while(isset($footerText[$f])){
										switch($f){
											case "0":
												$left = $footerText[$f];
											break;
											case "1":
												$center = $footerText[$f];
											break;
											case "2":
												if($footerText[$f] != ""){
													$right = $footerText[$f];
												}
											break;
										}	
										$f++;
									}
								}
							}
						break;
						case "3":
							$i++;
							if(isset($optionsMpdf[$i]) && $optionsMpdf[$i] != ""){
								$letterSize = $optionsMpdf[$i];
							}
						break;
					}
				}	
				$i++;
			}
		}
		//Generati PDF with the values
		if(isset($optionsMpdf[8]) && $optionsMpdf[8] != ""){
			$marginNew = explode(",", $optionsMpdf[8]);
			$mpdf=new mPDF('win-1252',$size_page,$letterSize,'',$marginNew[0],$marginNew[1],$marginNew[2],$marginNew[3],$marginNew[4],$marginNew[5]); 
		}else{
			$mpdf=new mPDF('win-1252',$size_page,$letterSize,'',8,8,10,10,10,10); 
		}
		$mpdf->useOnlyCoreFonts = true;
		$mpdf->SetDisplayMode('fullpage');
		$mpdf->list_indent_first_level = 0;
		if($setfooter){//add footer
			$mpdf->SetFooter($left.'|'.$center.'|'.$right);
			$mpdf->SetFooter(array(
				'L' => array(
					'content' => $left,
					'font-family' => '',
					'font-style' => 'B',	/* blank, B, I, or BI */
					'font-size' => '9',	/* in pts */
				),
				'C' => array(
					'content' => $center,
					'font-family' => 'serif',
					'font-style' => 'BI',
					'font-size' => '18',	/* gives default */
				),
				'R' => array(
					'content' => $right,
					'font-family' => '',
					'font-style' => 'B',
					'font-size' => '9',
				),
				'line' => 1,		/* 1 to include line below header/above footer */
			), 'E'	/* defines footer for Even Pages */
		);
		}
		//Replace especial Character
		$html = str_replace("Á","&Aacute;", $html);
		$html = str_replace("É","&Eacute;", $html);
		$html = str_replace("Í","&Iacute;", $html);
		$html = str_replace("Ó","&Oacute;", $html);
		$html = str_replace("Ú","&Uacute;", $html);
		$html = str_replace("Ñ","&Ntilde;", $html);
		$html = str_replace("á","&aacute;", $html);
		$html = str_replace("é","&eacute;", $html);
		$html = str_replace("í","&iacute;", $html);
		$html = str_replace("ó","&oacute;", $html);
		$html = str_replace("ú","&uacute;", $html);
		$html = str_replace("ñ","&ntilde;", $html);
		
		//Generate PDF
		$pdfFileName = $name.".pdf";
		$mpdf->WriteHTML($html);
		if(isset($optionsMpdf[5]) && isset($optionsMpdf[6])){
			if(filter_var($optionsMpdf[6], FILTER_VALIDATE_URL)){
				PDF::url($optionsMpdf[6], $optionsMpdf[5]);
				$optionsMpdf[5] .= ".pdf";
				$mpdf->SetImportUse();
				$pagecount = $mpdf->SetSourceFile($optionsMpdf[5]);
				for ($i=1; $i<=$pagecount; $i++) {
    				$import_page = $mpdf->ImportPage($i);
					$x = "19"; $y = ""; $h = '275';
    				$mpdf->UseTemplate($import_page, $x, $y, '', $h);
    				if ($i < $pagecount)
        				$mpdf->AddPage();
				}
                $mpdf->Close();
				unlink($optionsMpdf[5]);
			}
		}
		$mpdf->Output($pdfFileName, 'F');
		}
	}		
}
	