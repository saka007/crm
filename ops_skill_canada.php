<?php 	include_once("header.php");	 
$lead=$obj->display('dm_lead','id='.$_GET['lead']);
$lead1=$lead->fetch_array();
if(isset($_POST['opsId']))
{
	$data = array(
    			"email" => $_POST['email'],
    			"mobile" => $_POST['mobile']
				);
	$obj->update('dm_lead',$data,'id='.$_POST['lead']);

if($_POST['opsId']=="")
{
	$data = array(
				'leadId'  =>  $_POST['lead'], 'ecaReceDate'  =>  $_POST['ecaReceDate'], 'ecaPackage'  =>  $_POST['ecaPackage'], 'ecaDocStatus'  =>  $_POST['ecaDocStatus'], 'ecaAssmBody'  =>  $_POST['ecaAssmBody'], 'ecaApplyDate'  =>  $_POST['ecaApplyDate'], 'ecaPayMode'  =>  $_POST['ecaPayMode'], 'ecaTranSent'  =>  $_POST['ecaTranSent'], 'ecaTranStatus'  =>  $_POST['ecaTranStatus'], 'ecaStatus'  =>  $_POST['ecaStatus'], 'compDate'  =>  $_POST['compDate'], 'spQualify'  =>  $_POST['spQualify'], 'specaReceDate'  =>  $_POST['specaReceDate'], 'specaPackage'  =>  $_POST['specaPackage'], 'specaDocStatus'  =>  $_POST['specaDocStatus'], 'specaAssmBody'  =>  $_POST['specaAssmBody'], 'specaApplyDate'  =>  $_POST['specaApplyDate'], 'specaPayMode'  =>  $_POST['specaPayMode'], 'specaTranSent'  =>  $_POST['specaTranSent'], 'specaTranStatus'  =>  $_POST['specaTranStatus'], 'specaStatus'  =>  $_POST['specaStatus'], 'spcompDate'  =>  $_POST['spcompDate'], 'langTest'  =>  $_POST['langTest'], 'testStatus'  =>  $_POST['testStatus'], 'expiryDate'  =>  $_POST['expiryDate'], 'testDate'  =>  $_POST['testDate'], 'testScore'  =>  $_POST['testScore'], 'spLangTest'  =>  $_POST['langTestS'], 'eeDocReceDate'  =>  $_POST['eeDocReceDate'], 'eeDocSts'  =>  $_POST['eeDocSts'], 'eePoint'  =>  $_POST['eePoint'], 'eeNoc'  =>  $_POST['eeNoc'], 'eeProfLauDate'  =>  $_POST['eeProfLauDate'], 'eeProfExpDate'  =>  $_POST['eeProfExpDate'], 'eeScore'  =>  $_POST['eeScore'],'itaReceDate'  =>  $_POST['itaReceDate'], 'itaSubLastDate'  =>  $_POST['itaSubLastDate'], 'itaDocReceDate'  =>  $_POST['itaDocReceDate'], 'itaDocSts'  =>  $_POST['itaDocSts'], 'itaSubDate'  =>  $_POST['itaSubDate'], 'itaSts'  =>  $_POST['itaSts'], 'itaAddiReqDate'  =>  $_POST['itaAddiReqDate'], 'visaReqDate'  =>  $_POST['visaReqDate'], 'passSentDate'  =>  $_POST['passSentDate'], 'passReceDate'  =>  $_POST['passReceDate'], 'landDate'  =>  $_POST['landDate'], 'landService'  =>  $_POST['landService'],'qualification'=> $_POST['add_qualification'],'specialization'=> $_POST['Specialization'],'university' => $_POST['University'],'rating'=> $_POST['rating'],'reading'=>$_POST['reading'],'writing'=>$_POST['writing'],'listening'=>$_POST['listening'],'speaking'=>$_POST['speaking'],'statusS'=>$_POST['testStatusS'],'expirydateS'=>$_POST['expiryDateS'],'readingS'=>$_POST['readingS'],'writingS'=>$_POST['writingS'],'listeningS'=>$_POST['listeningS'],'speakingS'=>$_POST['speakingS'],'testdateS'=>$_POST['testDateS'],'testscoreS'=>$_POST['testScoreS'],'meetingreq'=>$_POST['mreq'],'meetingreqS'=>$_POST['mreqS'],'comments'=>$_POST['comments']			
				);
			$opsId=$obj->insert('dm_ops_skill_canada',$data);
}
else
{
	$opsId=$_POST['opsId'];
		$data = array(
				'ecaReceDate'  =>  $_POST['ecaReceDate'], 'ecaPackage'  =>  $_POST['ecaPackage'], 'ecaDocStatus'  =>  $_POST['ecaDocStatus'], 'ecaAssmBody'  =>  $_POST['ecaAssmBody'], 'ecaApplyDate'  =>  $_POST['ecaApplyDate'], 'ecaPayMode'  =>  $_POST['ecaPayMode'], 'ecaTranSent'  =>  $_POST['ecaTranSent'], 'ecaTranStatus'  =>  $_POST['ecaTranStatus'], 'ecaStatus'  =>  $_POST['ecaStatus'], 'compDate'  =>  $_POST['compDate'], 'spQualify'  =>  $_POST['spQualify'], 'specaReceDate'  =>  $_POST['specaReceDate'], 'specaPackage'  =>  $_POST['specaPackage'], 'specaDocStatus'  =>  $_POST['specaDocStatus'], 'specaAssmBody'  =>  $_POST['specaAssmBody'], 'specaApplyDate'  =>  $_POST['specaApplyDate'], 'specaPayMode'  =>  $_POST['specaPayMode'], 'specaTranSent'  =>  $_POST['specaTranSent'], 'specaTranStatus'  =>  $_POST['specaTranStatus'], 'specaStatus'  =>  $_POST['specaStatus'], 'spcompDate'  =>  $_POST['spcompDate'], 'langTest'  =>  $_POST['langTest'], 'testStatus'  =>  $_POST['testStatus'], 'expiryDate'  =>  $_POST['expiryDate'], 'testDate'  =>  $_POST['testDate'], 'testScore'  =>  $_POST['testScore'], 'spLangTest'  =>  $_POST['langTestS'], 'eeDocReceDate'  =>  $_POST['eeDocReceDate'], 'eeDocSts'  =>  $_POST['eeDocSts'], 'eePoint'  =>  $_POST['eePoint'], 'eeNoc'  =>  $_POST['eeNoc'], 'eeProfLauDate'  =>  $_POST['eeProfLauDate'], 'eeProfExpDate'  =>  $_POST['eeProfExpDate'], 'eeScore'  =>  $_POST['eeScore'], 'itaReceDate'  =>  $_POST['itaReceDate'], 'itaSubLastDate'  =>  $_POST['itaSubLastDate'], 'itaDocReceDate'  =>  $_POST['itaDocReceDate'], 'itaDocSts'  =>  $_POST['itaDocSts'], 'itaSubDate'  =>  $_POST['itaSubDate'], 'itaSts'  =>  $_POST['itaSts'], 'itaAddiReqDate'  =>  $_POST['itaAddiReqDate'], 'visaReqDate'  =>  $_POST['visaReqDate'], 'passSentDate'  =>  $_POST['passSentDate'], 'passReceDate'  =>  $_POST['passReceDate'], 'landDate'  =>  $_POST['landDate'], 'landService'  =>  $_POST['landService'],'qualification'=> $_POST['add_qualification'],'specialization'=> $_POST['Specialization'],'university' => $_POST['University'],'rating'=> $_POST['rating'],'reading'=>$_POST['reading'],'writing'=>$_POST['writing'],'listening'=>$_POST['listening'],'speaking'=>$_POST['speaking'],'statusS'=>$_POST['testStatusS'],'expirydateS'=>$_POST['expiryDateS'],'readingS'=>$_POST['readingS'],'writingS'=>$_POST['writingS'],'listeningS'=>$_POST['listeningS'],'speakingS'=>$_POST['speakingS'],'testdateS'=>$_POST['testDateS'],'testscoreS'=>$_POST['testScoreS'],'meetingreq'=>$_POST['mreq'],'meetingreqS'=>$_POST['mreqS'],'comments'=>$_POST['comments']				
				);
			$obj->update('dm_ops_skill_canada',$data,'id='.$opsId);
}		

	if($_FILES['ecaFile']['name']!="")
	{
		$filename=time().'_'.$_FILES['ecaFile']['name'];
        move_uploaded_file($_FILES['ecaFile']['tmp_name'], 'uploads/documents/' . $filename);
			$dataSheet2 = array(
	    			'opsId'   =>  $opsId,
	    			'leadId'  =>  $_POST['lead'],
	    			'tab'   =>  1,
	    			'file'   =>  $filename
	    			);
			$obj->insert('dm_ops_documents',$dataSheet2);
	}
	
	if($_FILES['spEcaFile']['name']!="")
	{
		$filename=time().'_'.$_FILES['spEcaFile']['name'];
        move_uploaded_file($_FILES['spEcaFile']['tmp_name'], 'uploads/documents/' . $filename);
			$dataSheet2 = array(
	    			'opsId'   =>  $opsId,
	    			'leadId'  =>  $_POST['lead'],
	    			'tab'   =>  2,
	    			'file'   =>  $filename
	    			);
			$obj->insert('dm_ops_documents',$dataSheet2);
	}
	
	if($_FILES['langFile']['name']!="")
	{
		$filename=time().'_'.$_FILES['langFile']['name'];
        move_uploaded_file($_FILES['langFile']['tmp_name'], 'uploads/documents/' . $filename);
			$dataSheet2 = array(
	    			'opsId'   =>  $opsId,
	    			'leadId'  =>  $_POST['lead'],
	    			'tab'   =>  3,
	    			'file'   =>  $filename
	    			);
			$obj->insert('dm_ops_documents',$dataSheet2);
	}

	if($_FILES['langFileS']['name']!="")
	{
		$filename=time().'_'.$_FILES['langFileS']['name'];
        move_uploaded_file($_FILES['langFileS']['tmp_name'], 'uploads/documents/' . $filename);
			$dataSheet2 = array(
	    			'opsId'   =>  $opsId,
	    			'leadId'  =>  $_POST['lead'],
	    			'tab'   =>  12,
	    			'file'   =>  $filename
	    			);
			$obj->insert('dm_ops_documents',$dataSheet2);
	}
	if($_FILES['eeFile']['name']!="")
	{
		$filename=time().'_'.$_FILES['eeFile']['name'];
        move_uploaded_file($_FILES['eeFile']['tmp_name'], 'uploads/documents/' . $filename);
			$dataSheet2 = array(
	    			'opsId'   =>  $opsId,
	    			'leadId'  =>  $_POST['lead'],
	    			'tab'   =>  4,
	    			'file'   =>  $filename
	    			);
			$obj->insert('dm_ops_documents',$dataSheet2);
	}
	
	if($_FILES['pnpFile']['name']!="")
	{
		$filename=time().'_'.$_FILES['pnpFile']['name'];
        move_uploaded_file($_FILES['pnpFile']['tmp_name'], 'uploads/documents/' . $filename);
			$dataSheet2 = array(
	    			'opsId'   =>  $opsId,
	    			'leadId'  =>  $_POST['lead'],
	    			'tab'   =>  5,
	    			'file'   =>  $filename
	    			);
			$obj->insert('dm_ops_documents',$dataSheet2);
	}
	
	if($_FILES['itaFile']['name']!="")
	{
		$filename=time().'_'.$_FILES['itaFile']['name'];
        move_uploaded_file($_FILES['itaFile']['tmp_name'], 'uploads/documents/' . $filename);
			$dataSheet2 = array(
	    			'opsId'   =>  $opsId,
	    			'leadId'  =>  $_POST['lead'],
	    			'tab'   =>  6,
	    			'file'   =>  $filename
	    			);
			$obj->insert('dm_ops_documents',$dataSheet2);
	}
	
	if($_FILES['visaFile']['name']!="")
	{
		$filename=time().'_'.$_FILES['visaFile']['name'];
        move_uploaded_file($_FILES['visaFile']['tmp_name'], 'uploads/documents/' . $filename);
			$dataSheet2 = array(
	    			'opsId'   =>  $opsId,
	    			'leadId'  =>  $_POST['lead'],
	    			'tab'   =>  7,
	    			'file'   =>  $filename
	    			);
			$obj->insert('dm_ops_documents',$dataSheet2);
	}
	
	if($_FILES['landFile']['name']!="")
	{
		$filename=time().'_'.$_FILES['landFile']['name'];
        move_uploaded_file($_FILES['landFile']['tmp_name'], 'uploads/documents/' . $filename);
			$dataSheet2 = array(
	    			'opsId'   =>  $opsId,
	    			'leadId'  =>  $_POST['lead'],
	    			'tab'   =>  8,
	    			'file'   =>  $filename
	    			);
			$obj->insert('dm_ops_documents',$dataSheet2);
	}
	


if($_POST['remark']!="")
{
	$data4 = array(
    			'lead'  =>  $_POST['lead'],
    			'date'  =>  date('Y-m-d'),
				'remark'  =>  $_POST['remark'],
				'emp' => $_SESSION['ID']
				);
			$obj->insert('dm_lead_remark',$data4);
}
if($_POST['conversation']!="")
{
	$data5 = array(
    			'leadid'  =>  $_POST['lead'],
    			'date'  =>  date('Y-m-d'),
    			'conversation'  =>  $_POST['conversation'],
				'type'  =>  $_POST['conversation_type'],
				'emp' => $_SESSION['ID']
				);
			$obj->insert('dm_ops_conversation',$data5);
}
if($_POST['status_c']!="")
{
	$filename = time().'_'.$_FILES['status_f']['name'];
	 move_uploaded_file($_FILES['status_f']['tmp_name'], 'uploads/status/' . $filename);
			$dataSheet = array(
	    			'leadid'  =>  $_POST['lead'],
	    			'date'  =>  date('Y-m-d'),
	    			'file'   =>  $filename,
	    			'status' => $_POST['status_c'],
	    			'counselorid' => $_SESSION['ID']
	    			);
			$obj->insert('client_status',$dataSheet);
}
if(trim($_POST['remove_status'])!=""){
$remove=explode("|||", $_POST['remove_status']);
foreach ($remove as $status_id) {
	if(trim($status_id)!="")
		$obj->delete('client_status','id='.$status_id);
}
}
// for($i=0;$i<count($_POST['pnpid']);$i++)
// {
// 	if($_POST['pnpLaun'][$i]!="" && $_POST['pnpSubDate'][$i]!="" && $_POST['pnpStatus'][$i])
// 	{
// 		$obj->delete('dm_pnp','id='.$_POST['pnpid'][$i]);
// 	}
// 	else
// 	{
// 		$datapnp=array(
// 			'opsid' => $opsId,
// 			'leadid'=>$_POST['lead'],
// 			'pnp'=>$_POST['pnpLaun'][$i],
// 			'subdate'=>$_POST['pnpSubDate'][$i],
// 			'expdate'=>$_POST['pnpExpDate'][$i],
// 			'status'=>$_POST['pnpStatus'][$i]
// 		 );
// 	}
// }

// for ($i=0;i<count($_POST['pnpLaun']);$i++)
// {
	if($_POST['pnpLaun']!="")
	{
		$datapnp=array(
			'opsid'=>$opsId,
			'leadid'=>$_POST['lead'],
			'pnp'=>$_POST['pnpLaun'],
			'subdate'=>$_POST['pnpSubDate'],
			'expdate'=>$_POST['pnpExpDate'],
			'status'=>$_POST['pnpStatus']
		);
		$odrpnp=$obj->insert('dm_pnp',$datapnp);
	}
//}
	if($_POST['copr_a']!="")
	{
		$data=array(
			'copr_a'=> $_POST['copr_a'],
			'copr_remarks'=> $_POST['copr_remarks'],
			'dipthi'=> 0);
			
		$obj->update('dm_client_personal',$data,'leadid='.$_GET['lead']);
	}
	
	if($_POST['client_sheet_a']!="")
	{
		$data=array(
			'client_sheet_a'=> $_POST['client_sheet_a'],
			'client_sheet_remarks'=> $_POST['client_sheet_remarks'],
			'dipthi'=> 0);
			
		$obj->update('dm_client_personal',$data,'leadid='.$_GET['lead']);
	}

	if($_POST['vphoto_a']!="")
	{
		$data=array(
			'vphoto_a'=> $_POST['vphoto_a'],
			'vphoto_remarks'=> $_POST['vphoto_remarks'],
			'dipthi'=> 0);
		$obj->update('dm_client_personal',$data,'leadid='.$_GET['lead']);
	}

	if($_POST['final_visa_docfb_a']!="")
	{
		$data=array(
			'final_visa_docfb_a'=> $_POST['final_visa_docfb_a'],
			'final_visa_docfb_remarks'=> $_POST['final_visa_docfb_remarks'],
			'dipthi'=> 0);
		$obj->update('dm_client_personal',$data,'leadid='.$_GET['lead']);
	}

	if($_POST['final_visa_docfull_a']!="")
	{
		$data=array(
			'final_visa_docfull_a'=> $_POST['final_visa_docfull_a'],
			'final_visa_docfull_remarks'=> $_POST['final_visa_docfull_remarks'],
			'dipthi'=> 0);
		$obj->update('dm_client_personal',$data,'leadid='.$_GET['lead']);
	}

	if($_POST['mcert_re_a']!="")
	{
		$data=array(
			'mcert_re_a'=> $_POST['mcert_re_a'],
			'mcert_re_remarks'=> $_POST['mcert_re_remarks'],
			'dipthi'=> 0);
		$obj->update('dm_client_personal',$data,'leadid='.$_GET['lead']);
	}

	if($_POST['bcert_a']!="")
	{
		$data=array(
			'bcert_a'=> $_POST['bcert_a'],
			'bcert_remarks'=> $_POST['bcert_remarks'],
			'dipthi'=> 0);
		$obj->update('dm_client_personal',$data,'leadid='.$_GET['lead']);
	}

	if($_POST['niddoc_a']!="")
	{
		$data=array(
			'niddoc_a'=> $_POST['niddoc_a'],
			'niddoc_remarks'=> $_POST['niddoc_remarks'],
			'dipthi'=> 0);
		$obj->update('dm_client_personal',$data,'leadid='.$_GET['lead']);
	}

	if($_POST['marraige_a']!="")
	{
		$data=array(
			'marraige_a'=> $_POST['marraige_a'],
			'marraige_remarks'=> $_POST['marraige_remarks'],
			'dipthi'=> 0);
		$obj->update('dm_client_personal',$data,'leadid='.$_GET['lead']);
	}

	if($_POST['ielts_a']!="")
	{
		$data=array(
			'ielts_a'=> $_POST['ielts_a'],
			'ielts_remarks'=> $_POST['ielts_remarks'],
			'dipthi'=> 0);
		$obj->update('dm_client_personal',$data,'leadid='.$_GET['lead']);
	}

	if($_POST['passport_a']!="")
	{
		$data=array(
			'passport_a'=> $_POST['passport_a'],
			'passport_remarks'=> $_POST['passport_remarks'],
			'dipthi'=> 0);
		$obj->update('dm_client_personal',$data,'leadid='.$_GET['lead']);
	}

	if($_POST['passport_new_a']!="")
	{
		$data=array(
			'passport_new_a'=> $_POST['passport_new_a'],
			'passport_new_remarks'=> $_POST['passport_new_remarks'],
			'dipthi'=> 0);
		$obj->update('dm_client_personal',$data,'leadid='.$_GET['lead']);
	}

	if($_POST['pcc_a']!="")
	{
		$data=array(
			'pcc_a'=> $_POST['pcc_a'],
			'pcc_remarks'=> $_POST['pcc_remarks'],
			'dipthi'=> 0);
		$obj->update('dm_client_personal',$data,'leadid='.$_GET['lead']);
	}

	if($_POST['photo_a']!="")
	{
		$data=array(
			'photo_a'=> $_POST['photo_a'],
			'photo_remarks'=> $_POST['photo_remarks'],
			'dipthi'=> 0);
		$obj->update('dm_client_personal',$data,'leadid='.$_GET['lead']);
	}

	if($_POST['resume_a']!="")
	{
		$data=array(
			'resume_a'=> $_POST['resume_a'],
			'resume_remarks'=> $_POST['resume_remarks'],
			'dipthi'=> 0);
		$obj->update('dm_client_personal',$data,'leadid='.$_GET['lead']);
	}

	if($_POST['con_mark_sheet_m_a']!="")
	{
		$data=array(
			'con_mark_sheet_m_a'=> $_POST['con_mark_sheet_m_a'],
				'con_mark_sheet_m_remarks'=> $_POST['con_mark_sheet_m_remarks'],
			'dipthi'=> 0);
		$obj->update('dm_client_edu',$data,'leadid='.$_GET['lead']);
	}

	if($_POST['con_mark_sheet_b_a']!="")
	{
		$data=array(
			'con_mark_sheet_b_a'=> $_POST['con_mark_sheet_b_a'],
			'con_mark_sheet_b_remarks'=> $_POST['con_mark_sheet_b_remarks'],
			'dipthi'=> 0);
		$obj->update('dm_client_edu',$data,'leadid='.$_GET['lead']);
	}

	if($_POST['ind_mark_sheet_m_a']!="")
	{
		$data=array(
			'ind_mark_sheet_m_a'=> $_POST['ind_mark_sheet_m_a'],
			'ind_mark_sheet_m_remarks'=> $_POST['ind_mark_sheet_m_remarks'],
			'dipthi'=> 0);
		$obj->update('dm_client_edu',$data,'leadid='.$_GET['lead']);
	}

	if($_POST['revised_eca_m_a']!="")
	{
		$data=array(
			'revised_eca_m_a'=> $_POST['revised_eca_m_a'],
			'revised_eca_m_remarks'=> $_POST['revised_eca_m_remarks'],
			'dipthi'=> 0);
		$obj->update('dm_client_edu',$data,'leadid='.$_GET['lead']);
	}

	if($_POST['revised_eca_b_a']!="")
	{
		$data=array(
			'revised_eca_b_a'=> $_POST['revised_eca_b_a'],
			'revised_eca_b_remarks'=> $_POST['revised_eca_b_remarks'],
			'dipthi'=> 0);
		$obj->update('dm_client_edu',$data,'leadid='.$_GET['lead']);
	}

	if($_POST['revised_wes_eca_m_a']!="")
	{
		$data=array(
			'revised_wes_eca_m_a'=> $_POST['revised_wes_eca_m_a'],
			'revised_wes_eca_m_remarks'=> $_POST['revised_wes_eca_m_remarks'],
			'dipthi'=> 0);
		$obj->update('dm_client_edu',$data,'leadid='.$_GET['lead']);
	}

	if($_POST['conv_cert_m_a']!="")
	{
		$data=array(
			'conv_cert_m_a'=> $_POST['conv_cert_m_a'],
			'conv_cert_m_remarks'=> $_POST['conv_cert_m_remarks'],
			'dipthi'=> 0);
		$obj->update('dm_client_edu',$data,'leadid='.$_GET['lead']);
	}

	if($_POST['revised_wes_eca_b_a']!="")
	{
		$data=array(
			'revised_wes_eca_b_a'=> $_POST['revised_wes_eca_b_a'],
			'revised_wes_eca_b_remarks'=> $_POST['revised_wes_eca_b_remarks'],
			'dipthi'=> 0);
		$obj->update('dm_client_edu',$data,'leadid='.$_GET['lead']);
	}

	if($_POST['eca_m_a']!="")
	{
		$data=array(
			'eca_m_a'=> $_POST['eca_m_a'],
			'eca_m_remarks'=> $_POST['eca_m_remarks'],
			'dipthi'=> 0);
		$obj->update('dm_client_edu',$data,'leadid='.$_GET['lead']);
	}

	if($_POST['conv_cert_b_a']!="")
	{
		$data=array(
			'conv_cert_b_a'=> $_POST['conv_cert_b_a'],
			'conv_cert_b_remarks'=> $_POST['conv_cert_b_remarks'],
			'dipthi'=> 0);
		$obj->update('dm_client_edu',$data,'leadid='.$_GET['lead']);
	}

	if($_POST['ind_mark_sheet_b_a']!="")
	{
		$data=array(
			'ind_mark_sheet_b_a'=> $_POST['ind_mark_sheet_b_a'],
			'ind_mark_sheet_b_remarks'=> $_POST['ind_mark_sheet_b_remarks'],
			'dipthi'=> 0);
		$obj->update('dm_client_edu',$data,'leadid='.$_GET['lead']);
	}

	if($_POST['bach_seal_trans_unv_a']!="")
	{
		$data=array(
			'bach_seal_trans_unv_a'=> $_POST['bach_seal_trans_unv_a'],
			'bach_seal_trans_unv_remarks'=> $_POST['bach_seal_trans_unv_remarks'],
			'dipthi'=> 0);
		$obj->update('dm_client_edu',$data,'leadid='.$_GET['lead']);
	}

	if($_POST['eca_b_a']!="")
	{
		$data=array(
			'eca_b_a'=> $_POST['eca_b_a'],
			'eca_b_remarks'=> $_POST['eca_b_remarks'],
			'dipthi'=> 0);
		$obj->update('dm_client_edu',$data,'leadid='.$_GET['lead']);
	}

	if($_POST['intermediate_a']!="")
	{
		$data=array(
			'intermediate_a'=> $_POST['intermediate_a'],
			'intermediate_remarks'=> $_POST['intermediate_remarks'],
			'dipthi'=> 0);
		$obj->update('dm_client_edu',$data,'leadid='.$_GET['lead']);
	}
	if($_POST['ssc_a']!="")
	{
		$data=array(
			'ssc_a'=> $_POST['ssc_a'],
			'ssc_remarks'=> $_POST['ssc_remarks'],
			'dipthi'=> 0);
		$obj->update('dm_client_edu',$data,'leadid='.$_GET['lead']);
	}
		if($_POST['copr_a_s']!="")
	{
		$data=array(
			'copr_a'=> $_POST['copr_a_s'],
			'copr_remarks'=> $_POST['copr_remarks_s'],
			'dipthi'=> 0);
			
		$obj->update('dm_spouse_personal',$data,'leadid='.$_GET['lead']);
	}

	if($_POST['vphoto_a_s']!="")
	{
		$data=array(
			'vphoto_a'=> $_POST['vphoto_a_s'],
			'vphoto_remarks'=> $_POST['vphoto_remarks_s'],
			'dipthi'=> 0);
		$obj->update('dm_spouse_personal',$data,'leadid='.$_GET['lead']);
	}

	if($_POST['final_visa_docfb_a_s']!="")
	{
		$data=array(
			'final_visa_docfb_a'=> $_POST['final_visa_docfb_a_s'],
			'final_visa_docfb_remarks'=> $_POST['final_visa_docfb_remarks_s'],
			'dipthi'=> 0);
		$obj->update('dm_spouse_personal',$data,'leadid='.$_GET['lead']);
	}

	if($_POST['final_visa_docfull_a_s']!="")
	{
		$data=array(
			'final_visa_docfull_a'=> $_POST['final_visa_docfull_a_s'],
			'final_visa_docfull_remarks'=> $_POST['final_visa_docfull_remarks_s'],
			'dipthi'=> 0);
		$obj->update('dm_spouse_personal',$data,'leadid='.$_GET['lead']);
	}

	if($_POST['bcert_a_s']!="")
	{
		$data=array(
			'bcert_a'=> $_POST['bcert_a_s'],
			'bcert_remarks'=> $_POST['bcert_remarks_s'],
			'dipthi'=> 0);
		$obj->update('dm_spouse_personal',$data,'leadid='.$_GET['lead']);
	}

	if($_POST['niddoc_a_s']!="")
	{
		$data=array(
			'niddoc_a'=> $_POST['niddoc_a_s'],
			'niddoc_remarks'=> $_POST['niddoc_remarks_s'],
			'dipthi'=> 0);
		$obj->update('dm_spouse_personal',$data,'leadid='.$_GET['lead']);
	}

	if($_POST['ielts_a_s']!="")
	{
		$data=array(
			'ielts_a'=> $_POST['ielts_a_s'],
			'ielts_remarks'=> $_POST['ielts_remarks_s'],
			'dipthi'=> 0);
		$obj->update('dm_spouse_personal',$data,'leadid='.$_GET['lead']);
	}

	if($_POST['passport_a_s']!="")
	{
		$data=array(
			'passport_a'=> $_POST['passport_a_s'],
			'passport_remarks'=> $_POST['passport_remarks_s'],
			'dipthi'=> 0);
		$obj->update('dm_spouse_personal',$data,'leadid='.$_GET['lead']);
	}

	if($_POST['passport_new_a_s']!="")
	{
		$data=array(
			'passport_new_a'=> $_POST['passport_new_a_s'],
			'passport_new_remarks'=> $_POST['passport_new_remarks_s'],
			'dipthi'=> 0);
		$obj->update('dm_spouse_personal',$data,'leadid='.$_GET['lead']);
	}

	if($_POST['pcc_a_s']!="")
	{
		$data=array(
			'pcc_a'=> $_POST['pcc_a_s'],
			'pcc_remarks'=> $_POST['pcc_remarks_s'],
			'dipthi'=> 0);
		$obj->update('dm_spouse_personal',$data,'leadid='.$_GET['lead']);
	}

	if($_POST['photo_a_s']!="")
	{
		$data=array(
			'photo_a'=> $_POST['photo_a_s'],
			'photo_remarks'=> $_POST['photo_remarks_s'],
			'dipthi'=> 0);
		$obj->update('dm_spouse_personal',$data,'leadid='.$_GET['lead']);
	}

	if($_POST['resume_a_s']!="")
	{
		$data=array(
			'resume_a'=> $_POST['resume_a_s'],
			'resume_remarks'=> $_POST['resume_remarks_s'],
			'dipthi'=> 0);
		$obj->update('dm_spouse_personal',$data,'leadid='.$_GET['lead']);
	}

	if($_POST['con_mark_sheet_m_a_s']!="")
	{
		$data=array(
			'con_mark_sheet_m_a'=> $_POST['con_mark_sheet_m_a_s'],
			'con_mark_sheet_m_remarks'=> $_POST['con_mark_sheet_m_remarks_s'],
			'dipthi'=> 0);
		$obj->update('dm_spouse_edu',$data,'leadid='.$_GET['lead']);
	}

	if($_POST['con_mark_sheet_b_a_s']!="")
	{
		$data=array(
			'con_mark_sheet_b_a'=> $_POST['con_mark_sheet_b_a_s'],
			'con_mark_sheet_b_remarks'=> $_POST['con_mark_sheet_b_remarks_s'],
			'dipthi'=> 0);
		$obj->update('dm_spouse_edu',$data,'leadid='.$_GET['lead']);
	}

	if($_POST['ind_mark_sheet_m_a_s']!="")
	{
		$data=array(
			'ind_mark_sheet_m_a'=> $_POST['ind_mark_sheet_m_a_s'],
			'ind_mark_sheet_m_remarks'=> $_POST['ind_mark_sheet_m_remarks_s'],
			'dipthi'=> 0);
		$obj->update('dm_spouse_edu',$data,'leadid='.$_GET['lead']);
	}

	if($_POST['revised_eca_m_a_s']!="")
	{
		$data=array(
			'revised_eca_m_a'=> $_POST['revised_eca_m_a_s'],
			'revised_eca_m_remarks'=> $_POST['revised_eca_m_remarks_s'],
			'dipthi'=> 0);
		$obj->update('dm_spouse_edu',$data,'leadid='.$_GET['lead']);
	}

	if($_POST['revised_eca_b_a_s']!="")
	{
		$data=array(
			'revised_eca_b_a'=> $_POST['revised_eca_b_a_s'],
			'revised_eca_b_remarks'=> $_POST['revised_eca_b_remarks_s'],
			'dipthi'=> 0);
		$obj->update('dm_spouse_edu',$data,'leadid='.$_GET['lead']);
	}

	if($_POST['revised_wes_eca_m_a_s']!="")
	{
		$data=array(
			'revised_wes_eca_m_a'=> $_POST['revised_wes_eca_m_a_s'],
			'revised_wes_eca_m_remarks'=> $_POST['revised_wes_eca_m_remarks_s'],
			'dipthi'=> 0);
		$obj->update('dm_spouse_edu',$data,'leadid='.$_GET['lead']);
	}

	if($_POST['conv_cert_m_a_s']!="")
	{
		$data=array(
			'conv_cert_m_a'=> $_POST['conv_cert_m_a_s'],
			'conv_cert_m_remarks'=> $_POST['conv_cert_m_remarks_s'],
			'dipthi'=> 0);
		$obj->update('dm_spouse_edu',$data,'leadid='.$_GET['lead']);
	}

	if($_POST['revised_wes_eca_b_a_s']!="")
	{
		$data=array(
			'revised_wes_eca_b_a'=> $_POST['revised_wes_eca_b_a_s'],
			'revised_wes_eca_b_remarks'=> $_POST['revised_wes_eca_b_remarks_s'],
			'dipthi'=> 0);
		$obj->update('dm_spouse_edu',$data,'leadid='.$_GET['lead']);
	}

	if($_POST['eca_m_a_s']!="")
	{
		$data=array(
			'eca_m_a'=> $_POST['eca_m_a_s'],
			'eca_m_remarks'=> $_POST['eca_m_remarks_s'],
			'dipthi'=> 0);
		$obj->update('dm_spouse_edu',$data,'leadid='.$_GET['lead']);
	}

	if($_POST['conv_cert_b_a_s']!="")
	{
		$data=array(
			'conv_cert_b_a'=> $_POST['conv_cert_b_a_s'],
			'conv_cert_b_remarks'=> $_POST['conv_cert_b_remarks_s'],
			'dipthi'=> 0);
		$obj->update('dm_spouse_edu',$data,'leadid='.$_GET['lead']);
	}

	if($_POST['ind_mark_sheet_b_a_s']!="")
	{
		$data=array(
			'ind_mark_sheet_b_a'=> $_POST['ind_mark_sheet_b_a_s'],
			'ind_mark_sheet_b_remarks'=> $_POST['ind_mark_sheet_b_remarks_s'],
			'dipthi'=> 0);
		$obj->update('dm_spouse_edu',$data,'leadid='.$_GET['lead']);
	}

	if($_POST['bach_seal_trans_unv_a_s']!="")
	{
		$data=array(
			'bach_seal_trans_unv_a'=> $_POST['bach_seal_trans_unv_a_s'],
			'bach_seal_trans_unv_remarks'=> $_POST['bach_seal_trans_unv_remarks_s'],
			'dipthi'=> 0);
		$obj->update('dm_spouse_edu',$data,'leadid='.$_GET['lead']);
	}

	if($_POST['eca_b_a_s']!="")
	{
		$data=array(
			'eca_b_a'=> $_POST['eca_b_a_s'],
			'eca_b_remarks'=> $_POST['eca_b_remarks_s'],
			'dipthi'=> 0);
		$obj->update('dm_spouse_edu',$data,'leadid='.$_GET['lead']);
	}

	if($_POST['intermediate_a_s']!="")
	{
		$data=array(
			'intermediate_a'=> $_POST['intermediate_a_s'],
			'intermediate_remarks'=> $_POST['intermediate_remarks_s'],
			'dipthi'=> 0);
		$obj->update('dm_spouse_edu',$data,'leadid='.$_GET['lead']);
	}
	if($_POST['ssc_a_s']!="")
	{
		$data=array(
			'ssc_a'=> $_POST['ssc_a_s'],
			'ssc_remarks'=> $_POST['ssc_remarks_s'],
			'dipthi'=> 0);
		$obj->update('dm_spouse_edu',$data,'leadid='.$_GET['lead']);
	}

if(isset($_POST['misc_count'])){
  for($i=1;$i<=$_POST['misc_count'];$i++) {
    if(isset($_POST['approval'.$i])){
    	$data=array(
			'approval'=> $_POST['approval'.$i],
			'remarks'=> (isset($_POST['remarks'.$i])?$_POST['remarks'.$i]:""),
			'dipthi'=> 0);
		$obj->update('mis_client_files',$data,'id='.$_POST['id'.$i]);
    }
  }
}
if(isset($_POST['exp_countc'])){
  for($i=1;$i<=$_POST['exp_countc'];$i++) {
    if(isset($_POST['offer_letterc'.$i])){
    	$data=array(
			'offer_letter_a'=> $_POST['offer_letterc'.$i],
			'offer_letter_remarks'=> $_POST['offer_letter_remarksc'.$i],
			'dipthi'=> 0);
		$obj->update('dm_client_professional',$data,'id='.$_POST['exp-idc'.$i]);
    }
     if(isset($_POST['reference_letterc'.$i])){
    	$data=array(
			'reference_letter_a'=> $_POST['reference_letterc'.$i],
			'reference_letter_remarks'=> $_POST['reference_letter_remarksc'.$i],
			'dipthi'=> 0);
		$obj->update('dm_client_professional',$data,'id='.$_POST['exp-idc'.$i]);
    }
    if(isset($_POST['releaving_letterc'.$i])){
    	$data=array(
			'releaving_letter_a'=> $_POST['releaving_letterc'.$i],
			'releaving_letter_remarks'=> $_POST['releaving_letter_remarksc'.$i],
			'dipthi'=> 0);
		$obj->update('dm_client_professional',$data,'id='.$_POST['exp-idc'.$i]);
    }
    if(isset($_POST['pay_slipsc'.$i])){
    	$data=array(
			'pay_slips_a'=> $_POST['pay_slipsc'.$i],
			'pay_slips_remarks'=> $_POST['pay_slips_remarksc'.$i],
			'dipthi'=> 0);
		$obj->update('dm_client_professional',$data,'id='.$_POST['exp-idc'.$i]);
    }
  }
}	
if(isset($_POST['exp-misc-c-count'])){
  for($j=1;$j<=$_POST['exp-misc-c-count'];$j++) {
    if(isset($_POST['exp_misc_ac'.$j])){
    	$data=array(
			'approval'=> $_POST['exp_misc_ac'.$j],
			'remarks'=> $_POST['misc_remarksc'.$j],
			'dipthi'=> 0);
		$obj->update('mis_client_files',$data,'id='.$_POST['exp-misc-idc'.$j]);
    }
  }
}

if(isset($_POST['exp_counts'])){
  for($i=1;$i<=$_POST['exp_counts'];$i++) {
    if(isset($_POST['offer_letters'.$i])){
    	$data=array(
			'offer_letter_a'=> $_POST['offer_letters'.$i],
			'offer_letter_remarks'=> $_POST['offer_letter_remarkss'.$i],
			'dipthi'=> 0);
		$obj->update('dm_spouse_professional',$data,'id='.$_POST['exp-ids'.$i]);
    }
     if(isset($_POST['reference_letters'.$i])){
    	$data=array(
			'reference_letter_a'=> $_POST['reference_letters'.$i],
			'reference_letter_remarks'=> $_POST['reference_letter_remarkss'.$i],
			'dipthi'=> 0);
		$obj->update('dm_spouse_professional',$data,'id='.$_POST['exp-ids'.$i]);
    }
    if(isset($_POST['releaving_letters'.$i])){
    	$data=array(
			'releaving_letter_a'=> $_POST['releaving_letters'.$i],
			'releaving_letter_remarks'=> $_POST['releaving_letter_remarkss'.$i],
			'dipthi'=> 0);
		$obj->update('dm_spouse_professional',$data,'id='.$_POST['exp-ids'.$i]);
    }
    if(isset($_POST['pay_slipss'.$i])){
    	$data=array(
			'pay_slips_a'=> $_POST['pay_slipss'.$i],
			'pay_slips_remarks'=> $_POST['pay_slips_remarkss'.$i],
			'dipthi'=> 0);
		$obj->update('dm_spouse_professional',$data,'id='.$_POST['exp-ids'.$i]);
    }
  }
}	
if(isset($_POST['exp-misc-s-count'])){
  for($j=1;$j<=$_POST['exp-misc-s-count'];$j++) {
    if(isset($_POST['exp_misc_as'.$j])){
    	$data=array(
			'approval'=> $_POST['exp_misc_as'.$j],
			'remarks'=> $_POST['misc_remarkss'.$j],
			'dipthi'=> 0);
		$obj->update('mis_client_files',$data,'id='.$_POST['exp-misc-ids'.$j]);
    }
  }
}
$data = array(
	'lead_id' => $_POST['lead'],
	'counselor_id' => $_SESSION['ID']
     );
$obj->insert('dm_ops_updated_by',$data);
if($_POST['any_change']=='1'){
  include_once('mailreviewalert.php');
}

header("location:ops_skill_canada.php?lead=".$_POST['lead']);//atifa un comment

}

if(isset($_GET['docId']))
{
$d=$obj->display('dm_ops_documents','id='.$_GET['docId']);
$d1=$d->fetch_array();

unlink('uploads/documents/'.$d1['file']);

	$obj->delete('dm_ops_documents','id='.$_GET['docId']);

	header("location:ops_skill_canada.php?lead=".$_GET['lead']);

}



$ops=$obj->display('dm_ops_skill_canada','leadId='.$_GET['lead']);
$ops1=$ops->fetch_array();


$lead=$obj->display('dm_lead','id='.$_GET['lead']);
$lead1=$lead->fetch_array();
$pnp=$obj->display('dm_pnp','opsid='.$ops1['id']);
$mf1=$obj->display('mis_client_files','  leadId='.$_GET['lead']);
// $count=$pnp->num_rows;$count=$count+2;
// // echo $count;
// for($k=2;$k<$count;$k++)
// 		{
// 		$datapnp2=array(
// 			'pnp'=>$_POST['pnpLaunD'.$k],
// 			'subdate'=>$_POST['pnpSubDateD'.$k],
// 			'expdate'=>$_POST['pnpExpDateD'.$k],
// 			'status'=>$_POST['pnpStatusD'.$k]
// 		);
// 		$obj->update('dm_pnp',$datapnp2,'opsid='.$opsId);
// 		// echo "hi";
// 	}

?>
<style>
.opeForm label { 
display:block;
}
.opeForm label a{ 
float:right; 
color:#CC0000
}
.btn-success,.btn-danger,.btn-secondary{
	margin-bottom: 16px;
}
.exp{
  border: 1px solid #cccccc;
    padding: 7px 14px 0px 14px;
    border-radius: 5px;
    margin: 15px 0px;
}
.exp .row{
	padding-left: 20px;
}
#tab13 textarea,#tab15 textarea,#tab19 textarea,#tab16 textarea,#tab17 textarea,#tab18 textarea{
	height: 38px;
}
#tab13 a.btn.btn-icon-split ,#tab15 a.btn.btn-icon-split,#tab18 a.btn.btn-icon-split,#tab19 a.btn.btn-icon-split,#tab16 a.btn.btn-icon-split,#tab17 a.btn.btn-icon-split {
    white-space: nowrap;
    text-overflow: ellipsis;
    max-width: 488px;
    display: block;
    overflow: hidden;
}
p{
margin: 8px;
    border: 0;
    border: none;
    border-bottom: 2px solid #ced4da;
    padding: 5px 10px;
    padding-bottom: 0px;
}
p span{
	font-size: 12px;
    color: #9da2a7;
    float: right;
}
p span:first-child{
	font-size: 14px;
    color: #2cb674;
    float: left;
}
.icon{
	height: 38px;
	margin-left: 6px;
}
.btn-secondary {
    color: #fff;
    background-color: #adb8c1;
    border-color: #adb8c1;
}
</style>
</style>
		
<div class="col-sm-10">
			<h3 class="mb-3">Final Skill Draft for Canada</h3> 
				<form action="" method="post" enctype="multipart/form-data" class="opeForm" >
					<input type="hidden" name="lead" value="<?php echo $_GET['lead'];?>" />
					<input type="hidden" name="opsId" value="<?php echo $ops1['id'];?>" />
					<input type="hidden" id="any_change" name="any_change" />
<ul class="nav nav-tabs">
  <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#tab1"><strong>Personal Details</strong></a></li>
  <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#tab2"><strong>ECA</strong></a></li>
  <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#tab3"><strong>Spouse ECA</strong></a></li>
  <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#tab4"><strong>Language<br /> Proficiancy</strong></a></li>
  <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#tab12"><strong>Language<br /> Proficiancy<br />(Spouse)</strong></a></li>
  <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#tab5"><strong>Express Entry</strong></a></li>
  <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#tab6"><strong>PnP</strong></a></li>
  <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#tab7"><strong>ITA</strong></a></li>
  <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#tab8"><strong>Visa Grant</strong></a></li>
  <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#tab9"><strong>Post Landing<br /> Service</strong></a></li>
  <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#tab10"><strong>Remark</strong></a></li>
  <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#tab11"><strong>Conversation</strong></a></li>
  <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#tab13"><strong>Doc. review <i class="fa fa-user	"></i></strong></a></li>
  <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#tab15"><strong>Doc. review <i class="fa fa-graduation-cap"></i></strong></a></li>
    <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#tab19"><strong>Doc. review <i class="fa fa-briefcase"></i></strong></a></li>

  <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#tab16"><strong>Spouse Doc. review <i class="fa fa-user	"></i></strong></a></li>
  <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#tab17"><strong>Spouse Doc. review <i class="fa fa-graduation-cap"></i></strong></a></li>
    <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#tab18"><strong>Spouse Doc. review <i class="fa fa-briefcase"></i></strong></a></li>

  <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#tab14"><strong>Status Update</strong></a></li>
    <li class="nav-item"><a class="nav-link openobs" data-toggle="tab" href="#tab20"><strong>Messages</strong></a></li>
</ul>

<div class="tab-content p-3 mb-3">

<div class="tab-pane active container" id="tab1">
<div class="row">
<div class="col-sm-4 form-group"><label>First Name</label><input type="text" class="form-control" id="fname" name="fname" value="<?php echo $lead1['fname'];?>" readonly=""></div>
<div class="col-sm-4 form-group"><label>Middle Name</label><input type="text" class="form-control" id="mname" name="mname" value="<?php echo $lead1['mname'];?>" readonly=""></div>
<div class="col-sm-4 form-group"><label>Family Name</label><input type="text" class="form-control" id="lname" name="lname" value="<?php echo $lead1['lname'];?>" readonly=""></div>
</div>
<?php if($_SESSION['TYPE']=="SA" || $_SESSION['TYPE']=="RMSM" || $_SESSION['TYPE']=="RM" || $_SESSION['TYPE']=="DGM" || $_SESSION['TYPE']=="OM" || $_SESSION['TYPE']=="AOM" || $_SESSION['TYPE']=="ARM" || $_SESSION['TYPE']=="FMP"){ ?>
<div class="row">
<div class="col-sm-4 form-group"><label>Email</label><input type="text" class="form-control" id="email" name="email" value="<?php echo $lead1['email'];?>" <?php if($_SESSION['ROLE']!=1) { echo 'readonly=""';} ?> ></div>
<div class="col-sm-4 form-group"><label>Landline</label><input type="text" class="form-control" id="phone" name="phone" value="<?php echo $lead1['phone'];?>"  readonly=""></div>
<div class="col-sm-4 form-group"><label>Cell No.</label><input type="text" class="form-control" id="mobile" name="mobile" value="<?php echo $lead1['mobile'];?>" <?php if($_SESSION['ROLE']!=1) { echo 'readonly=""';} ?>  ></div>
</div>
<?php } ?>
<div class="row">
<div class="col-sm-4 form-group"><label>Nationality</label><select class="form-control" name="nationality"  readonly="">
	<option value="">Select</option>
	<?php $con=$obj->display('dm_countries','1=1 order by name');
	while($con1=$con->fetch_array())
	{
	?>
	<option value="<?php echo $con1['name'];?>"  <?php if($con1['name']==$lead1['nationality']) { echo 'selected="selected"';}?>><?php echo $con1['name'];?></option>
	<?php } ?>
	
	
</select>
</div>
<div class="col-sm-8 form-group"><label>Address</label><input type="text" class="form-control" id="address" name="address" value="<?php echo $lead1['address'];?>"  readonly=""></div>

</div>
	
	
  	<div class="row" style="overflow:hidden">
<div class="col-sm-4 form-group"><label>DOB</label><input type="text" class="form-control" id="dob" name="dob" value="<?php echo date('d-m-Y',strtotime($lead1['dob']));?>"  readonly=""></div>
<div class="col-sm-4 form-group"><label>Gender</label>
	<select name="gender" class="form-control"  readonly="">
		<option value="Male" <?php if($lead1['gender']=="Male") { echo 'selected="selected"';}?>>Male</option>
		<option value="Female" <?php if($lead1['gender']=="Female") { echo 'selected="selected"';}?>>Female</option>
		</select>
</div>

<div class="col-sm-4 form-group"><label>Country Interested</label>
<select class="form-control" name="country_interest"  readonly="">
	
<?php $cnt=$obj->display('dm_country_proces','status=1 order by name');
	while($cnt1=$cnt->fetch_array())
	{
	?>
	<option value="<?php echo $cnt1['id'];?>"  <?php if($cnt1['id']==$lead1['country_interest']) { echo 'selected="selected"';}?>><?php echo $cnt1['name'];?></option>
	<?php } ?>		
	</select>
	
	</div>
			
</div>

<div class="row">


<div class="col-sm-4 form-group"><label>Program Interested</label>
<select class="form-control" name="service_interest"  readonly="">
	<?php $ser=$obj->display('dm_service','status=1 order by name');
	while($ser1=$ser->fetch_array())
	{
	?>
	<option value="<?php echo $ser1['id'];?>"  <?php if($ser1['id']==$lead1['service_interest']) { echo 'selected="selected"';}?>><?php echo $ser1['name'];?></option>
	<?php } ?>
	
</select>
</div>

<div class="col-sm-4 form-group"><label>Lead Source</label>
<select class="form-control" name="market_source"  readonly="">
	<?php $sou=$obj->display('dm_source','status=1 order by name');
	while($sou1=$sou->fetch_array())
	{
	?>
	<option value="<?php echo $sou1['id'];?>"  <?php if($sou1['id']==$lead1['market_source']) { echo 'selected="selected"';}?>><?php echo $sou1['name'];?></option>
	<?php } ?>
	
	</select>
	
	</div>
<?php
$emp=$obj->display('dm_employee','id='.$lead1['Counsilor']);
$emp1=$emp->fetch_array();
?>	
			
	<div class="col-sm-4 form-group"><label>Counselor</label><input type="text" class="form-control" id="Counsilor" name="Counsilor" value="<?=$emp1['name'];?>"  readonly=""></div>
			
			
		
</div>
  	
  <div class="row" style="overflow:hidden">
	
  
	<div class="col-sm-4 form-group"><label >Date of retaintion</label><input type="text" class="form-control" id="retnDate" name="retnDate" value="<?php echo date('d-m-Y',strtotime($lead1['agreeDate']));?>" readonly=""  ></div>
	<div class="col-sm-4 form-group"><label >Agreement No</label><input type="text" class="form-control" id="agreeNo" name="agreeNo"  value="<?php $gh=$obj->display('dm_lead_contract','leadId='.$_GET['lead']); $gh1=$gh->fetch_array(); echo $gh1['id'];?>" readonly="">
	</div>

 <?php
$emp=$obj->display('dm_employee','id='.$lead1['assignTo']);
$emp1=$emp->fetch_array();
?>	
			
	<div class="col-sm-4 form-group"><label>Case Processing Officer</label><input type="text" class="form-control" id="officer" name="officer" value="<?=$emp1['name'];?>"  readonly=""></div> 

	</div>
 

  </div>
 
 <!--TAB2--> 
  
  <div class="tab-pane container" id="tab2">
  <div class="row" style="overflow:hidden">
  
	<div class="col-sm-4 form-group"><label>ECA Package received from client</label><input type="text" class="form-control" id="ecaReceDate" name="ecaReceDate" value="<?php echo $ops1['ecaReceDate'];?>" ></div>
	<div class="col-sm-4 form-group"><label>Source</label>
	<select class="form-control" name="ecaPackage">
		<option value="">Select</option>
		<option value="PA" <?php if($ops1['ecaPackage']=="PA") { echo 'selected="selected"';}?>>PA</option>
		<option value="Spouse" <?php if($ops1['ecaPackage']=="Spouse") { echo 'selected="selected"';}?>>Spouse</option>
		</select>
	</div>
	<div class="col-sm-4 form-group"><label>Documents status</label>
		<select class="form-control" name="ecaDocStatus">
		<option value="">Select</option>
		<option value="Complete" <?php if($ops1['ecaDocStatus']=="Complete") { echo 'selected="selected"';}?>>Complete</option>
		<option value="Pending" <?php if($ops1['ecaDocStatus']=="Pending") { echo 'selected="selected"';}?>>Pending</option>
		<option value="Yet not submitted" <?php if($ops1['ecaDocStatus']=="Yet not submitted") { echo 'selected="selected"';}?>>Yet not submitted</option>
		</select>

	</div>
	<div class="col-sm-4 form-group"><label>Assessment Body</label>
	<select class="form-control" name="ecaAssmBody">
		<option value="">Select</option>
		<option value="WES" <?php if($ops1['ecaAssmBody']=="WES") { echo 'selected="selected"';}?>>WES</option>
		<option value="ICAS" <?php if($ops1['ecaAssmBody']=="ICAS") { echo 'selected="selected"';}?>>ICAS</option>
		<option value="IQAS" <?php if($ops1['ecaAssmBody']=="IQAS") { echo 'selected="selected"';}?>>IQAS</option>
		<option value="MCC" <?php if($ops1['ecaAssmBody']=="MCC") { echo 'selected="selected"';}?>>MCC</option>
		<option value="PECB" <?php if($ops1['ecaAssmBody']=="PECB") { echo 'selected="selected"';}?>>PECB</option>
		<option value="ICES" <?php if($ops1['ecaAssmBody']=="ICES") { echo 'selected="selected"';}?>>ICES</option>
		</select>
	</div>
	<div class="col-sm-4 form-group"><label>Date Applied</label><input type="text" class="form-control" id="ecaApplyDate" name="ecaApplyDate" value="<?php echo $ops1['ecaApplyDate'];?>" ></div>
	<div class="col-sm-4 form-group"><label>Payment Mode</label>
	<select class="form-control" name="ecaPayMode">
		<option value="">Select</option>
		<option value="Client Credit Card" <?php if($ops1['ecaPayMode']=="Client Credit Card") { echo 'selected="selected"';}?>>Client Credit Card</option>
		<option value="Company Credit Card" <?php if($ops1['ecaPayMode']=="Company Credit Card") { echo 'selected="selected"';}?>>Company Credit Card</option>
		</select>
	</div>

	<div class="col-sm-3 form-group"><label>Transcript sent</label>
	<select class="form-control" name="ecaTranSent">
		<option value="">Select</option>
		<option value="Client" <?php if($ops1['ecaTranSent']=="Client") { echo 'selected="selected"';}?>>Client</option>
		<option value="Company" <?php if($ops1['ecaTranSent']=="Company") { echo 'selected="selected"';}?>>Company</option>
		</select>
	</div>
	<div class="col-sm-3 form-group"><label>Transcript Status</label>
	<select class="form-control" name="ecaTranStatus">
		<option value="">Select</option>
		<option value="Accepted" <?php if($ops1['ecaTranStatus']=="Accepted") { echo 'selected="selected"';}?>>Accepted</option>
		<option value="Yet not submitted" <?php if($ops1['ecaTranStatus']=="Yet not submitted") { echo 'selected="selected"';}?>>Yet not submitted</option>
		<option value="Rejected" <?php if($ops1['ecaTranStatus']=="Rejected") { echo 'selected="selected"';}?>>Rejected</option>
		<option value="In process" <?php if($ops1['ecaTranStatus']=="In process") { echo 'selected="selected"';}?>>In process</option>
		<option value="Verification" <?php if($ops1['ecaTranStatus']=="Verification") { echo 'selected="selected"';}?>>Verification</option>
		</select>
	</div>
  <div class="col-sm-3 form-group"><label>Status</label>
	<select class="form-control" name="ecaStatus">
		<option value="">Select</option>
		<option value="Pending" <?php if($ops1['ecaStatus']=="Pending") { echo 'selected="selected"';}?>>Pending</option>
		<option value="Completed" <?php if($ops1['ecaStatus']=="Completed") { echo 'selected="selected"';}?>>Completed</option>
		<option value="Insufficient" <?php if($ops1['ecaStatus']=="Insufficient") { echo 'selected="selected"';}?>>Insufficient</option>
		<option value="Registered" <?php if($ops1['ecaStatus']=="Registered") { echo 'selected="selected"';}?>>Registered</option>
		</select>
   </div>
  <div class="col-sm-3 form-group"><label>Date of Completion</label>
  <input type="text" class="form-control" id="compDate" name="compDate" value="<?php echo $ops1['compDate'];?>" >
  </div></div>

<div class="row">
	<div class="col-sm-3 form-group"><label>Add Qualification</label>
	<select class="form-control" name="add_qualification">
		<option value="">Select</option>
		<option value="High School" <?php if($ops1['qualification']=="High School") { echo 'selected="selected"';}?>>High School</option>
		<option value="Diploma" <?php if($ops1['qualification']=="Diploma") { echo 'selected="selected"';}?>>Diploma</option>
		<option value="Bachelors"<?php if($ops1['qualification']=="Bachelors") { echo 'selected="selected"';}?>>Bachelors</option>
		<option value="Masters" <?php if($ops1['qualification']=="Masters") { echo 'selected="selected"';}?>>Master's</option>
		<option value="PhD" <?php if($ops1['qualification']=="PhD") { echo 'selected="selected"';}?>>PhD</option>
	</select></div>
	<div class="col-sm-3 form-group"><label>Specialization</label>
		<input type="text" class="form-control" id="specialization" name="Specialization" value="<?php echo $ops1['specialization'];?>">
	</div>
	<div class="col-sm-3 form-group"><label>University</label>
		<input type="text" class="form-control" id="university" name="University" value="<?php echo $ops1['university'];?>">
	</div>
	<div class="col-sm-3 form-group"><label>Rating</label>
		<select class="form-control" name="rating">
			<option value="+ve" <?php if($ops1['rating']=="+ve") { echo 'selected="selected"';}?>>+ve</option>
			<option value="-ve" <?php if($ops1['rating']=="-ve") { echo 'selected="selected"';}?>>-ve</option>
		</select></div>
	</div>

	
  <div class="col-sm-4 form-group"><label>Document File </label>
  <input type="file" class="form-control" id="ecaFile" name="ecaFile" >
  </div>
   <?php 
   if($ops->num_rows > 0)
   {
   $doc=$obj->display('dm_ops_documents','tab=1 and leadId='.$_GET['lead'].' and opsId='.$ops1['id']);
   while($doc1=$doc->fetch_array())
   {
   ?>
   <div class="row" style="overflow:hidden">
	
  <a href="uploads/documents/<?=$doc1['file'];?>" target="_blank" class="btn btn-secondary btn-icon-split">
                    <span class="icon text-white-50">
                      <i class="fa fa-check"></i>
                    </span>
                    <span class="text"><?php echo $doc1['file'];?></span>
                  </a>
                  <a href="ops_skill_canada.php?docId=<?php echo $doc1['id'];?>&lead=<?php echo $_GET['lead'];?>" class="btn btn-danger icon">
                    <span class=" text-white-50">
                      <i class="fa fa-trash"></i>
                    </span>
                  </a>
              
              </div>
  <?php } }?>
  	
  </div>
  
  
  

 <!--TAB3--> 

  <div class="tab-pane container" id="tab3">
  
  <div class="row" style="overflow:hidden">
  <div class="col-sm-4 form-group"><label >Spouse Qualification</label>
	  <input type="text" class="form-control" id="spQualify" name="spQualify" value="<?php echo $ops1['spQualify'];?>" >
   </div>
  
	<div class="col-sm-4 form-group"><label>ECA Package received from client</label><input type="text" class="form-control" id="specaReceDate" name="specaReceDate" value="<?php echo $ops1['specaReceDate'];?>" ></div>
	<div class="col-sm-4 form-group"><label>Source</label>
	<select class="form-control" name="specaPackage">
		<option value="">Select</option>
		<option value="PA" <?php if($ops1['specaPackage']=="PA") { echo 'selected="selected"';}?>>PA</option>
		<option value="Spouse" <?php if($ops1['specaPackage']=="Spouse") { echo 'selected="selected"';}?>>Spouse</option>
		</select>
	</div>
	<div class="col-sm-4 form-group"><label>Documents status</label>
		<select class="form-control" name="specaDocStatus">
		<option value="">Select</option>
		<option value="Complete" <?php if($ops1['specaDocStatus']=="Complete") { echo 'selected="selected"';}?>>Complete</option>
		<option value="Pending" <?php if($ops1['specaDocStatus']=="Pending") { echo 'selected="selected"';}?>>Pending</option>
		<option value="Yet not submitted" <?php if($ops1['specaDocStatus']=="Yet not submitted") { echo 'selected="selected"';}?>>Yet not submitted</option>
		</select>

	</div>
	<div class="col-sm-4 form-group"><label>Assessment Body</label>
	<select class="form-control" name="specaAssmBody">
		<option value="">Select</option>
		<option value="WES" <?php if($ops1['specaAssmBody']=="WES") { echo 'selected="selected"';}?>>WES</option>
		<option value="ICAS" <?php if($ops1['specaAssmBody']=="ICAS") { echo 'selected="selected"';}?>>ICAS</option>
		<option value="IQAS" <?php if($ops1['specaAssmBody']=="IQAS") { echo 'selected="selected"';}?>>IQAS</option>
		<option value="MCC" <?php if($ops1['specaAssmBody']=="MCC") { echo 'selected="selected"';}?>>MCC</option>
		<option value="PECB" <?php if($ops1['specaAssmBody']=="PECB") { echo 'selected="selected"';}?>>PECB</option>
		<option value="ICES" <?php if($ops1['specaAssmBody']=="ICES") { echo 'selected="selected"';}?>>ICES</option>
		</select>
	</div>
	<div class="col-sm-4 form-group"><label>Date Applied</label><input type="text" class="form-control" id="specaApplyDate" name="specaApplyDate" value="<?php echo $ops1['specaApplyDate'];?>" ></div>
	<div class="col-sm-4 form-group"><label>Payment Mode</label>
	<select class="form-control" name="specaPayMode">
		<option value="">Select</option>
		<option value="Client Credit Card" <?php if($ops1['specaPayMode']=="Client Credit Card") { echo 'selected="selected"';}?>>Client Credit Card</option>
		<option value="Company Credit Card" <?php if($ops1['specaPayMode']=="Company Credit Card") { echo 'selected="selected"';}?>>Company Credit Card</option>
		</select>
	</div>

	<div class="col-sm-3 form-group"><label>Transcript sent</label>
	<select class="form-control" name="specaTranSent">
		<option value="">Select</option>
		<option value="Client" <?php if($ops1['specaTranSent']=="Client") { echo 'selected="selected"';}?>>Client</option>
		<option value="Company" <?php if($ops1['specaTranSent']=="Company") { echo 'selected="selected"';}?>>Company</option>
		</select>
	</div>
	<div class="col-sm-3 form-group"><label>Transcript Status</label>
	<select class="form-control" name="specaTranStatus">
		<option value="">Select</option>
		<option value="Accepted" <?php if($ops1['specaTranStatus']=="Accepted") { echo 'selected="selected"';}?>>Accepted</option>
		<option value="Yet not submitted" <?php if($ops1['specaTranStatus']=="Yet not submitted") { echo 'selected="selected"';}?>>Yet not submitted</option>
		<option value="Rejected" <?php if($ops1['specaTranStatus']=="Rejected") { echo 'selected="selected"';}?>>Rejected</option>
		</select>
	</div>
  <div class="col-sm-3 form-group"><label >Status</label>
	<select class="form-control" name="specaStatus">
		<option value="">Select</option>
		<option value="Pending" <?php if($ops1['specaStatus']=="Pending") { echo 'selected="selected"';}?>>Pending</option>
		<option value="Completed" <?php if($ops1['specaStatus']=="Completed") { echo 'selected="selected"';}?>>Completed</option>
		<option value="Insufficient" <?php if($ops1['specaStatus']=="Insufficient") { echo 'selected="selected"';}?>>Insufficient</option>
		<option value="Registered" <?php if($ops1['specaStatus']=="Registered") { echo 'selected="selected"';}?>>Registered</option>
		<option value="not applicable" <?php if($ops1['specaStatus']=="not applicable") { echo 'selected="selected"';}?>>Not applicable</option>
		</select>

   </div>
  <div class="col-sm-3 form-group"><label >Date of Completion</label>
  <input type="text" class="form-control" id="spcompDate" name="spcompDate" value="<?php echo $ops1['spcompDate'];?>" >
  </div>
	
 <div class="col-sm-3 form-group"><label>Document File <?php if($ops1['spEcaFile']!="") {?> <a href="uploads/documents/<?=$ops1['spEcaFile'];?>" target="_blank" style="float:right">View</a><?php }?></label>
  <input type="file" class="form-control" id="spEcaFile" name="spEcaFile" >
  </div>
  
  </div>
	
	 <?php 
   if($ops->num_rows > 0)
   {
   $doc=$obj->display('dm_ops_documents','tab=2 and leadId='.$_GET['lead'].' and opsId='.$ops1['id']);
   while($doc1=$doc->fetch_array())
   {
   ?>
  
  <div class="row" style="overflow:hidden">
	
  <a href="uploads/documents/<?=$doc1['file'];?>" target="_blank" class="btn btn-secondary btn-icon-split">
                    <span class="icon text-white-50">
                      <i class="fa fa-check"></i>
                    </span>
                    <span class="text"><?php echo $doc1['file'];?></span>
                  </a>
                  <a href="ops_skill_canada.php?docId=<?php echo $doc1['id'];?>&lead=<?php echo $_GET['lead'];?>" class="btn btn-danger icon">
                    <span class=" text-white-50">
                      <i class="fa fa-trash"></i>
                    </span>
                  </a>
              
              </div>
  <?php } }?>
  	
  </div>
  
   <!--TAB4--> 

  
  <div class="tab-pane container" id="tab4">
  <div class="row" style="overflow:hidden">
  <div class="col-sm-4 form-group"><label >Language Test</label>
	<select class="form-control" name="langTest">
		<option value="">Select</option>
		<option value="IELTS(AT)" <?php if($ops1['langTest']=="IELTS(AT)") { echo 'selected="selected"';}?>>IELTS(AT)</option>
		<option value="IELTS(GT)" <?php if($ops1['langTest']=="IELTS(GT)") { echo 'selected="selected"';}?>>IELTS(GT)</option>
		<option value="PTE" <?php if($ops1['langTest']=="PTE") { echo 'selected="selected"';}?>>PTE</option>
		<option value="TOEFL(iBT)" <?php if($ops1['langTest']=="TOEFL(iBT)") { echo 'selected="selected"';}?>>TOEFL(iBT)</option>
		<option value="OET" <?php if($ops1['langTest']=="OET") { echo 'selected="selected"';}?>>OET</option>
		<option value="CAE" <?php if($ops1['langTest']=="CAE") { echo 'selected="selected"';}?>>CAE</option>
		<option value="CELPIP" <?php if($ops1['langTest']=="CELPIP") { echo 'selected="selected"';}?>>CELPIP</option>
		<option value="TEF" <?php if($ops1['langTest']=="TEF") { echo 'selected="selected"';}?>>TEF</option>
		<option value="TCF" <?php if($ops1['langTest']=="TCF") { echo 'selected="selected"';}?>>TCF</option>
		</select>
	</div>		
  <div class="col-sm-4 form-group"><label >Status</label>
	<select class="form-control" name="testStatus">
		<option value="">Select</option>
		<option value="Pending" <?php if($ops1['testStatus']=="Pending") { echo 'selected="selected"';}?>>Pending</option>
		<option value="Completed" <?php if($ops1['testStatus']=="Completed") { echo 'selected="selected"';}?>>Completed</option>
		<option value="Insufficient" <?php if($ops1['testStatus']=="Insufficient") { echo 'selected="selected"';}?>>Insufficient</option>
		<option value="Registered" <?php if($ops1['testStatus']=="Registered") { echo 'selected="selected"';}?>>Registered</option>
		</select>
	</div>		
	<div class="col-sm-4 form-group"><label>Expiry Date </label><input type="text" class="form-control" id="expiryDate" name="expiryDate" value="<?php echo $ops1['expiryDate'];?>" ></div>
  </div>


  <div class="row" style="overflow:hidden">
  <div class="col-sm-3 form-group"><label>Reading</label><input type="text" class="form-control" id="reading" name="reading" value="<?php echo $ops1['reading'];?>" ></div>
  <div class="col-sm-3 form-group"><label>Writing</label><input type="text" class="form-control" id="writing" name="writing" value="<?php echo $ops1['writing'];?>" ></div>
  <div class="col-sm-3 form-group"><label>Listening</label><input type="text" class="form-control" id="listening" name="listening" value="<?php echo $ops1['listening'];?>" ></div>
  <div class="col-sm-3 form-group"><label>Speaking</label><input type="text" class="form-control" id="speaking" name="speaking" value="<?php echo $ops1['speaking'];?>" ></div>
 </div>

    <div class="row" style="overflow:hidden">
	<div class="col-sm-4 form-group"><label>Test Date </label><input type="text" class="form-control" id="testDate" name="testDate" value="<?php echo $ops1['testDate'];?>" ></div>
	<div class="col-sm-4 form-group"><label>Test Score </label><input type="text" class="form-control" id="testScore" name="testScore" value="<?php echo $ops1['testScore'];?>" ></div>
	<div class="col-sm-4 form-group"><label>Meeting Requirement</label>
	<select class="form-control" name="mreq">
		<option value="">Select</option>
		<option value="YES" <?php if($ops1['meetingreq']=="YES") { echo 'selected="selected"';}?>>YES</option>
		<option value="NO" <?php if($ops1['meeting']=="NO") { echo 'selected="selected"';}?>>NO</option>
	</select>
    </div>	
	<div class="col-sm-3 form-group"><label>Document File <?php if($ops1['langFile']!="") {?> <a href="uploads/documents/<?=$ops1['langFile'];?>" target="_blank" style="float:right">View</a><?php }?></label>
  <input type="file" class="form-control" id="langFile" name="langFile" >
  </div>		
	</div>
	
	 <?php 
   if($ops->num_rows > 0)
   {
   $doc=$obj->display('dm_ops_documents','tab=3 and leadId='.$_GET['lead'].' and opsId='.$ops1['id']);
   while($doc1=$doc->fetch_array())
   {
   ?>
  <div class="row" style="overflow:hidden">
	
  <a href="uploads/documents/<?=$doc1['file'];?>" target="_blank" class="btn btn-secondary btn-icon-split">
                    <span class="icon text-white-50">
                      <i class="fa fa-check"></i>
                    </span>
                    <span class="text"><?php echo $doc1['file'];?></span>
                  </a>
                  <a href="ops_skill_canada.php?docId=<?php echo $doc1['id'];?>&lead=<?php echo $_GET['lead'];?>" class="btn btn-danger icon">
                    <span class=" text-white-50">
                      <i class="fa fa-trash"></i>
                    </span>
                  </a>
              
              </div>
  <?php }} ?>
	
	
  </div>


<!--TAB12-->

<div class="tab-pane container" id="tab12">
  <div class="row" style="overflow:hidden">
  <div class="col-sm-4 form-group"><label >Language Test (spouse)</label>
	<select class="form-control" name="langTestS">
		<option value="">Select</option>
		<option value="IELTS(AT)" <?php if($ops1['spLangTest']=="IELTS(AT)") { echo 'selected="selected"';}?>>IELTS(AT)</option>
		<option value="IELTS(GT)" <?php if($ops1['spLangTest']=="IELTS(GT)") { echo 'selected="selected"';}?>>IELTS(GT)</option>
		<option value="PTE" <?php if($ops1['spLangTest']=="PTE") { echo 'selected="selected"';}?>>PTE</option>
		<option value="TOEFL(iBT)" <?php if($ops1['spLangTest']=="TOEFL(iBT)") { echo 'selected="selected"';}?>>TOEFL(iBT)</option>
		<option value="OET" <?php if($ops1['spLangTest']=="OET") { echo 'selected="selected"';}?>>OET</option>
		<option value="CAE" <?php if($ops1['spLangTest']=="CAE") { echo 'selected="selected"';}?>>CAE</option>
		<option value="CELPIP" <?php if($ops1['spLangTest']=="CELPIP") { echo 'selected="selected"';}?>>CELPIP</option>
		<option value="TEF" <?php if($ops1['spLangTest']=="TEF") { echo 'selected="selected"';}?>>TEF</option>
		<option value="TCF" <?php if($ops1['spLangTest']=="TCF") { echo 'selected="selected"';}?>>TCF</option>
		</select>
	</div>		
  <div class="col-sm-4 form-group"><label >Status</label>
	<select class="form-control" name="testStatusS">
		<option value="">Select</option>
		<option value="Pending" <?php if($ops1['statusS']=="Pending") { echo 'selected="selected"';}?>>Pending</option>
		<option value="Completed" <?php if($ops1['statusS']=="Completed") { echo 'selected="selected"';}?>>Completed</option>
		<option value="Insufficient" <?php if($ops1['statusS']=="Insufficient") { echo 'selected="selected"';}?>>Insufficient</option>
		<option value="Registered" <?php if($ops1['statusS']=="Registered") { echo 'selected="selected"';}?>>Registered</option>
		<option value="not applicable" <?php if($ops1['statusS']=="not applicable") { echo 'selected="selected"';}?>>Not applicable</option>
		</select>
	</div>		
	<div class="col-sm-4 form-group"><label>Expiry Date </label><input type="text" class="form-control" id="expiryDateS" name="expiryDateS" value="<?php echo $ops1['expirydateS'];?>"></div>
  </div>


  <div class="row" style="overflow:hidden">
  <div class="col-sm-3 form-group"><label>Reading</label><input type="text" class="form-control" id="reading" name="readingS" value="<?php echo $ops1['readingS'];?>" ></div>
  <div class="col-sm-3 form-group"><label>Writing</label><input type="text" class="form-control" id="writing" name="writingS" value="<?php echo $ops1['writingS'];?>" ></div>
  <div class="col-sm-3 form-group"><label>Listening</label><input type="text" class="form-control" id="listening" name="listeningS" value="<?php echo $ops1['listeningS'];?>" ></div>
  <div class="col-sm-3 form-group"><label>Speaking</label><input type="text" class="form-control" id="speaking" name="speakingS" value="<?php echo $ops1['speakingS'];?>" ></div>
 </div>

    <div class="row" style="overflow:hidden">
	<div class="col-sm-4 form-group"><label>Test Date </label><input type="text" class="form-control" id="testDateS" name="testDateS" value="<?php echo $ops1['testdateS'];?>" ></div>
	<div class="col-sm-4 form-group"><label>Test Score </label><input type="text" class="form-control" id="testScore" name="testScoreS" value="<?php echo $ops1['testscoreS'];?>" ></div>
	<div class="col-sm-4 form-group"><label>Meeting Requirement</label>
	<select class="form-control" name="mreqS">
		<option value="">Select</option>
		<option value="YES" <?php if($ops1['meetingreqS']=="YES") { echo 'selected="selected"';}?>>YES</option>
		<option value="NO" <?php if($ops1['meetingreqS']=="NO") { echo 'selected="selected"';}?>>NO</option>
	</select>
    </div>	
	<div class="col-sm-3 form-group"><label>Document File <?php if($ops1['langFileS']!="") {?> <a href="uploads/documents/<?=$ops1['langFileS'];?>" target="_blank" style="float:right">View</a><?php }?></label>
  <input type="file" class="form-control" id="langFile" name="langFileS" >
  </div>		
	</div>
	
	 <?php 
   if($ops->num_rows > 0)
   {
   $doc=$obj->display('dm_ops_documents','tab=12 and leadId='.$_GET['lead'].' and opsId='.$ops1['id']);
   while($doc1=$doc->fetch_array())
   {
   ?>
  <div class="row" style="overflow:hidden">
	
  <a href="uploads/documents/<?=$doc1['file'];?>" target="_blank" class="btn btn-secondary btn-icon-split">
                    <span class="icon text-white-50">
                      <i class="fa fa-check"></i>
                    </span>
                    <span class="text"><?php echo $doc1['file'];?></span>
                  </a>
                  <a href="ops_skill_canada.php?docId=<?php echo $doc1['id'];?>&lead=<?php echo $_GET['lead'];?>" class="btn btn-danger icon">
                    <span class=" text-white-50">
                      <i class="fa fa-trash"></i>
                    </span>
                  </a>
              
              </div>
  <?php }} ?>
	
	
  </div>



 <!--TAB5--> 


  <div class="tab-pane container" id="tab5">
  
  <div class="row" style="overflow:hidden">
  <div class="col-sm-4 form-group"><label>Documents Received </label>
	  <input type="text" class="form-control" id="eeDocReceDate" name="eeDocReceDate" value="<?php echo $ops1['eeDocReceDate'];?>" >
  </div>
  <div class="col-sm-4 form-group"><label>Document Status</label>
	   <select class="form-control" name="eeDocSts" id="eeDocSts">
		<option value="">Select</option>
		<option value="Complete" <?php if($ops1['eeDocSts']=="Complete") { echo 'selected="selected"';}?>>Complete</option>
		<option value="Incomplete" <?php if($ops1['eeDocSts']=="Incomplete") { echo 'selected="selected"';}?>>Incomplete</option>
	</select>
  </div>
  <div class="col-sm-4 form-group"><label>Point Claimed in FSWP</label>
	  <input type="text" class="form-control" id="eePoint" name="eePoint" value="<?php echo $ops1['eePoint'];?>" >
   </div>
  <div class="col-sm-4 form-group"><label>NOC confirmed by client</label>
  <input type="text" class="form-control" id="eeNoc" name="eeNoc" value="<?php echo $ops1['eeNoc'];?>" >
  </div>
  <div class="col-sm-4 form-group"><label>Profile launched</label>
  <input type="text" class="form-control" id="eeProfLauDate" name="eeProfLauDate" value="<?php echo $ops1['eeProfLauDate'];?>" >
  </div>
  <div class="col-sm-4 form-group"><label >Profile Expiry </label>
  <input type="text" class="form-control" id="eeProfExpDate" name="eeProfExpDate" value="<?php echo $ops1['eeProfExpDate'];?>" >
  </div>
  <div class="col-sm-4 form-group"><label >CRS scores</label>
  <input type="text" class="form-control" id="eeScore" name="eeScore" value="<?php echo $ops1['eeScore'];?>" >
  </div>
	<div class="col-sm-3 form-group"><label>Document File <?php if($ops1['eeFile']!="") {?> <a href="uploads/documents/<?=$ops1['eeFile'];?>" target="_blank" style="float:right">View</a><?php }?></label>
  <input type="file" class="form-control" id="eeFile" name="eeFile" >
  </div>	
  </div>
  
   <?php 
   if($ops->num_rows > 0)
   {
   $doc=$obj->display('dm_ops_documents','tab=4 and leadId='.$_GET['lead'].' and opsId='.$ops1['id']);
   while($doc1=$doc->fetch_array())
   {
   ?>
  <div class="row" style="overflow:hidden">
	
  <a href="uploads/documents/<?=$doc1['file'];?>" target="_blank" class="btn btn-secondary btn-icon-split">
                    <span class="icon text-white-50">
                      <i class="fa fa-check"></i>
                    </span>
                    <span class="text"><?php echo $doc1['file'];?></span>
                  </a>
                  <a href="ops_skill_canada.php?docId=<?php echo $doc1['id'];?>&lead=<?php echo $_GET['lead'];?>" class="btn btn-danger icon">
                    <span class=" text-white-50">
                      <i class="fa fa-trash"></i>
                    </span>
                  </a>
              
              </div>
  <?php }} ?>
  
  </div>
  
   <!--TAB 6   --> 

  <div class="tab-pane container" id="tab6">
  	<input type="hidden" name="pnpid" value="<?php echo $pnp1['id'];?>"	 />
  	<?php
  	if($pnp->num_rows>0)
  	{
  		$p=1;
  	while($pnp1=$pnp->fetch_array())
  	{
  		$p++;
  		?>
  		<div class="row" style="overflow:hidden" id="pnpbodyD">
  <div class="col-sm-3 form-group"><label >PNP launched</label>
	  <select class="update" data-id="<?=$pnp1['id']?>" data-column="pnp" name="pnpLaunD<?=$p?>">
		<option value="">Select</option>
		<option value="PEI" <?php if($pnp1['pnp']=="PEI") { echo 'selected="selected"';}?>>PEI</option>
		<option value="Nova Soctia" <?php if($pnp1['pnp']=="Nova Soctia") { echo 'selected="selected"';}?>>Nova Soctia</option>
		<option value="New Brwunscwick" <?php if($pnp1['pnp']=="New Brwunscwick") { echo 'selected="selected"';}?>>New Brwunscwick</option>
		<option value="Saskatchewan" <?php if($pnp1['pnp']=="Saskatchewan") { echo 'selected="selected"';}?>>Saskatchewan</option>
		<option value="Quebec" <?php if($pnp1['pnp']=="Quebec") { echo 'selected="selected"';}?>>Quebec</option>
		<option value="Modern" <?php if($pnp1['pnp']=="Modern") { echo 'selected="selected"';}?>>Modern</option>
		<option value="Manitoba" <?php if($pnp1['pnp']=="Manitoba") { echo 'selected="selected"';}?>>Manitoba</option>
		<option value="Ontario" <?php if($pnp1['pnp']=="Ontario") { echo 'selected="selected"';}?>>Ontario</option>
		<option value="British Columbia" <?php if($pnp1['pnp']=="British Columbia") { echo 'selected="selected"';}?>>British Columbia</option>
		<option value="Alberta" <?php if($pnp1['pnp']=="Alberta") { echo 'selected="selected"';}?>>Alberta</option>
		<option value="Yukon" <?php if($pnp1['pnp']=="Yukon") { echo 'selected="selected"';}?>>Yukon</option>
		<option value="Newfoundland & Labrador" <?php if($pnp1['pnp']=="Newfoundland & Labrador") { echo 'selected="selected"';}?>>Newfoundland & Labrador </option>
	</select>

   </div>
  <div class="col-sm-3 form-group"><label >Submission Date</label>
  <input type="text" class="update" data-id="<?=$pnp1['id']?>" data-column="subdate" name="pnpSubDateD<?=$p?>" value="<?php echo $pnp1['subdate'];?>" >
  </div>
  <div class="col-sm-3 form-group"><label >Expiry Date</label>
  <input type="text" class="update" data-id="<?=$pnp1['id']?>" data-column="expdate" name="pnpExpDateD<?=$p?>" value="<?php echo $pnp1['expdate'];?>" >
  </div>
  <div class="col-sm-3 form-group"><label >STATUS</label>
	  <select class="update" data-id="<?=$pnp1['id']?>" data-column="status" name="pnpStatusD<?=$p?>" id="pnpStatus">
		<option value="">Select</option>
		<option value="IN PROGRESS" <?php if($pnp1['status']=="IN PROGRESS") { echo 'selected="selected"';}?>>IN PROGRESS</option>
		<option value="APPROVED" <?php if($pnp1['status']=="APPROVED") { echo 'selected="selected"';}?>>APPROVED</option>
		<option value="Rejected" <?php if($pnp1['status']=="Rejected") { echo 'selected="selected"';}?>>Rejected</option>
	</select>
	<!-- <button onclick="add_a_row()" type="button" class=""> Add New </button> -->
   </div>
   </div><?php }}?>

  <div class="row" style="overflow:hidden" id="pnpbody">
  <div class="col-sm-3 form-group"><label >PNP launched</label>
	  <select class="form-control" name="pnpLaun">
		<option value="">Select</option>
		<option value="PEI" <?php if($pnp1['pnp']=="PEI") { echo 'selected="selected"';}?>>PEI</option>
		<option value="Nova Soctia" <?php if($pnp1['pnp']=="Nova Soctia") { echo 'selected="selected"';}?>>Nova Soctia</option>
		<option value="New Brwunscwick" <?php if($pnp1['pnp']=="New Brwunscwick") { echo 'selected="selected"';}?>>New Brwunscwick</option>
		<option value="Saskatchewan" <?php if($pnp1['pnp']=="Saskatchewan") { echo 'selected="selected"';}?>>Saskatchewan</option>
		<option value="Quebec" <?php if($pnp1['pnp']=="Quebec") { echo 'selected="selected"';}?>>Quebec</option>
		<option value="Modern" <?php if($pnp1['pnp']=="Modern") { echo 'selected="selected"';}?>>Modern</option>
		<option value="Manitoba" <?php if($pnp1['pnp']=="Manitoba") { echo 'selected="selected"';}?>>Manitoba</option>
		<option value="Ontario" <?php if($pnp1['pnp']=="Ontario") { echo 'selected="selected"';}?>>Ontario</option>
		<option value="British Columbia" <?php if($pnp1['pnp']=="British Columbia") { echo 'selected="selected"';}?>>British Columbia</option>
		<option value="Alberta" <?php if($pnp1['pnp']=="Alberta") { echo 'selected="selected"';}?>>Alberta</option>
		<option value="Yukon" <?php if($pnp1['pnp']=="Yukon") { echo 'selected="selected"';}?>>Yukon</option>
		<option value="Newfoundland & Labrador" <?php if($pnp1['pnp']=="Newfoundland & Labrador") { echo 'selected="selected"';}?>>Newfoundland & Labrador </option>
	</select>

   </div>
  <div class="col-sm-3 form-group"><label >Submission Date</label>
  <input type="text" class="form-control" id="pnpSubDate" name="pnpSubDate" value="<?php echo $pnp1['subdate'];?>" >
  </div>
  <div class="col-sm-3 form-group"><label >Expiry Date</label>
  <input type="text" class="form-control" id="pnpExpDate" name="pnpExpDate" value="<?php echo $pnp1['expdate'];?>" >
  </div>
  <div class="col-sm-3 form-group"><label >STATUS</label>
	  <select class="form-control" name="pnpStatus" id="pnpStatus">
		<option value="">Select</option>
		<option value="IN PROGRESS" <?php if($pnp1['status']=="IN PROGRESS") { echo 'selected="selected"';}?>>IN PROGRESS</option>
		<option value="APPROVED" <?php if($pnp1['status']=="APPROVED") { echo 'selected="selected"';}?>>APPROVED</option>
		<option value="Rejected" <?php if($pnp1['status']=="Rejected") { echo 'selected="selected"';}?>>Rejected</option>
	</select>
	<!-- <button onclick="add_a_row()" type="button" class=""> Add New </button> -->
   </div>
   </div> 
	<div class="col-sm-3 form-group"><label>Document File <?php if($ops1['pnpFile']!="") {?> <a href="uploads/documents/<?=$ops1['pnpFile'];?>" target="_blank" style="float:right">View</a><?php }?></label>
  <input type="file" class="form-control" id="pnpFile" name="pnpFile" >
  </div>	
  
  
   <?php 
   if($ops->num_rows > 0)
   {
   $doc=$obj->display('dm_ops_documents','tab=5 and leadId='.$_GET['lead'].' and opsId='.$ops1['id']);
   while($doc1=$doc->fetch_array())
   {
   ?>
  <div class="row" style="overflow:hidden">
	
  <a href="uploads/documents/<?=$doc1['file'];?>" target="_blank" class="btn btn-secondary btn-icon-split">
                    <span class="icon text-white-50">
                      <i class="fa fa-check"></i>
                    </span>
                    <span class="text"><?php echo $doc1['file'];?></span>
                  </a>
                  <a href="ops_skill_canada.php?docId=<?php echo $doc1['id'];?>&lead=<?php echo $_GET['lead'];?>" class="btn btn-danger icon">
                    <span class=" text-white-50">
                      <i class="fa fa-trash"></i>
                    </span>
                  </a>
              
              </div>
  <?php }} ?>
  
  </div>
  
   <!--TAB7--> 


  <div class="tab-pane container" id="tab7">
    <div class="row" style="overflow:hidden">
	
	  <div class="col-sm-4 form-group"><label>ITA RECEIVED DATE</label>
 		 <input type="text" class="form-control" id="itaReceDate" name="itaReceDate" value="<?php echo $ops1['itaReceDate'];?>" >
	  </div>
	
	  <div class="col-sm-4 form-group"><label>LAST DATE OF SUBMISSION</label>
 		 <input type="text" class="form-control" id="itaSubLastDate" name="itaSubLastDate" value="<?php echo $ops1['itaSubLastDate'];?>" >
	  </div>

	  <div class="col-sm-4 form-group"><label>DOCUMENTS RECEIVED FROM CLIENT</label>
 		 <input type="text" class="form-control" id="itaDocReceDate" name="itaDocReceDate" value="<?php echo $ops1['itaDocReceDate'];?>" >
	  </div>
  <div class="col-sm-4 form-group"><label >DOCUMENTS STATUS</label>
	  <select class="form-control" name="itaDocSts">
		<option value="">Select</option>
		<option value="In Completed" <?php if($ops1['itaDocSts']=="In Completed") { echo 'selected="selected"';}?>>In Completed</option>
		<option value="Completed" <?php if($ops1['itaDocSts']=="Completed") { echo 'selected="selected"';}?>>Completed</option>
	</select>

   </div>  
	  <div class="col-sm-4 form-group"><label>ITA SUBMISSION DATE</label>
 		 <input type="text" class="form-control" id="itaSubDate" name="itaSubDate" value="<?php echo $ops1['itaSubDate'];?>" >
	  </div>
  <div class="col-sm-4 form-group"><label >ITA STATUS</label>
	  <select class="form-control" name="itaSts">
		<option value="">Select</option>
		<option value="IN PROGRESS" <?php if($ops1['itaSts']=="IN PROGRESS") { echo 'selected="selected"';}?>>IN PROGRESS</option>
		<option value="APPROVED" <?php if($ops1['itaSts']=="APPROVED") { echo 'selected="selected"';}?>>APPROVED</option>
		<option value="Rejected" <?php if($ops1['itaSts']=="Rejected") { echo 'selected="selected"';}?>>Rejected</option>
		<option value="DECLINED" <?php if($ops1['itaSts']=="DECLINED") { echo 'selected="selected"';}?>>DECLINED</option>
	</select>

   </div>  

	  <div class="col-sm-4 form-group"><label>ADDITIONAL REQUIREMENT SENT TO CLIENT</label>
 		 <input type="text" class="form-control" id="itaAddiReqDate" name="itaAddiReqDate" value="<?php echo $ops1['itaAddiReqDate'];?>" >
	  </div>

	<div class="col-sm-3 form-group"><label>Document File <?php if($ops1['itaFile']!="") {?> <a href="uploads/documents/<?=$ops1['itaFile'];?>" target="_blank" style="float:right">View</a><?php }?>
	</label>
  <input type="file" class="form-control" id="itaFile" name="itaFile">
  </div>
  <div class="col-sm-12 form-group">
							<?php
							echo "<p>".$ops1['comments'].'-'.date('d/m/Y').'<p>';
							?>
</div>
	<div class="col-sm-12 form-group"><label>Comments</label><textarea type="text" class="form-control" id="comments" name="comments"></textarea></div>	
	</div>

 <?php 
 if($ops->num_rows > 0)
   {
   $doc=$obj->display('dm_ops_documents','tab=6 and leadId='.$_GET['lead'].' and opsId='.$ops1['id']);
   while($doc1=$doc->fetch_array())
   {
   ?>
  <div class="row" style="overflow:hidden">
	
  <a href="uploads/documents/<?=$doc1['file'];?>" target="_blank" class="btn btn-secondary btn-icon-split">
                    <span class="icon text-white-50">
                      <i class="fa fa-check"></i>
                    </span>
                    <span class="text"><?php echo $doc1['file'];?></span>
                  </a>
                  <a href="ops_skill_canada.php?docId=<?php echo $doc1['id'];?>&lead=<?php echo $_GET['lead'];?>" class="btn btn-danger icon">
                    <span class=" text-white-50">
                      <i class="fa fa-trash"></i>
                    </span>
                  </a>
              
              </div>
  <?php }} ?>

  </div>
  
   <!--TAB8--> 

  
  <div class="tab-pane container" id="tab8">
     <div class="row" style="overflow:hidden">
	  <div class="col-sm-4 form-group"><label>REQUEST LETTER RECEIVED </label>
 		 <input type="text" class="form-control" id="visaReqDate" name="visaReqDate" value="<?php echo $ops1['visaReqDate'];?>" >
	  </div>
	  	  <div class="col-sm-4 form-group"><label>PASSPORT SENT TO EMBASSY</label>
 		 <input type="text" class="form-control" id="passSentDate" name="passSentDate" value="<?php echo $ops1['passSentDate'];?>" >
	  </div>
	  	  <div class="col-sm-4 form-group"><label>PASSPORT RECEIVED FROM EMBASSY</label>
 		 <input type="text" class="form-control" id="passReceDate" name="passReceDate" value="<?php echo $ops1['passReceDate'];?>" >
	  </div>	
	  <div class="col-sm-3 form-group"><label>Document File <?php if($ops1['visaFile']!="") {?> <a href="uploads/documents/<?=$ops1['visaFile'];?>" target="_blank" style="float:right">View</a><?php }?></label>
  <input type="file" class="form-control" id="visaFile" name="visaFile" >
  </div>	 
	 </div>
 
  <?php 
  if($ops->num_rows > 0)
   {
   $doc=$obj->display('dm_ops_documents','tab=7 and leadId='.$_GET['lead'].' and opsId='.$ops1['id']);
   while($doc1=$doc->fetch_array())
   {
   ?>
  <div class="row" style="overflow:hidden">
	
  <a href="uploads/documents/<?=$doc1['file'];?>" target="_blank" class="btn btn-secondary btn-icon-split">
                    <span class="icon text-white-50">
                      <i class="fa fa-check"></i>
                    </span>
                    <span class="text"><?php echo $doc1['file'];?></span>
                  </a>
                  <a href="ops_skill_canada.php?docId=<?php echo $doc1['id'];?>&lead=<?php echo $_GET['lead'];?>" class="btn btn-danger icon">
                    <span class=" text-white-50">
                      <i class="fa fa-trash"></i>
                    </span>
                  </a>
              
              </div>
  <?php }} ?>
 
  </div>
  
     <!--TAB9--> 

  <div class="tab-pane container" id="tab9">
       <div class="row" style="overflow:hidden">
	  	  <div class="col-sm-3 form-group"><label>DATE OF LANDING IN CANADA</label>
 		 <input type="text" class="form-control" id="landDate" name="landDate" value="<?php echo $ops1['landDate'];?>" >
		  </div>
 	  	  <div class="col-sm-9 form-group"><label>PLS SERVICES</label> 
		  <input type="checkbox" name="landService[]" /> PICK UP &nbsp;&nbsp;&nbsp;
		  <input type="checkbox" name="landService[]" /> ACCOMODATION &nbsp;&nbsp;&nbsp;
		  <input type="checkbox" name="landService[]"/> JOB ASSISTANCE &nbsp;&nbsp;&nbsp;
		  <input type="checkbox" name="landService[]"/> OTHER SERVICES
		  
		  </div>
		  
		   <div class="col-sm-3 form-group"><label>Document File <?php if($ops1['landFile']!="") {?> <a href="uploads/documents/<?=$ops1['landFile'];?>" target="_blank" style="float:right">View</a><?php }?></label>
  			<input type="file" class="form-control" id="landFile" name="landFile" >
 		   </div>	
	   </div>

 <?php 
 if($ops->num_rows > 0)
   {
   $doc=$obj->display('dm_ops_documents','tab=8 and leadId='.$_GET['lead'].' and opsId='.$ops1['id']);
   while($doc1=$doc->fetch_array())
   {
   ?>
  <div class="row" style="overflow:hidden">
	
  <a href="uploads/documents/<?=$doc1['file'];?>" target="_blank" class="btn btn-secondary btn-icon-split">
                    <span class="icon text-white-50">
                      <i class="fa fa-check"></i>
                    </span>
                    <span class="text"><?php echo $doc1['file'];?></span>
                  </a>
                  <a href="ops_skill_canada.php?docId=<?php echo $doc1['id'];?>&lead=<?php echo $_GET['lead'];?>" class="btn btn-danger icon">
                    <span class=" text-white-50">
                      <i class="fa fa-trash"></i>
                    </span>
                  </a>
              
              </div>
  <?php } }?>

  </div>

   <!--TAB10--> 


  <div class="tab-pane container" id="tab10">
       <div class="row" style="overflow:hidden">
<div class="col-sm-12 form-group">
<?php 
				$rem=$obj->display('dm_lead_remark','lead='.$_GET["lead"]); while($rem1=$rem->fetch_array()) 
				{
					if(trim($rem1['remark'])!="")
						echo "<p>".$rem1['remark'].'<br/><span>'.date('d/m/Y',strtotime($rem1['date'])).'</span></p><br/>';
				}
?>
</div>
	   <div class="col-sm-12 form-group"><label>Remark</label><textarea type="text" class="form-control" id="remark" name="remark"></textarea></div>
	   </div>

  </div>


   <!--TAB11-->


  <div class="tab-pane container" id="tab11">
  	<div class="row" style="overflow:hidden">
  		<div class="col-sm-12 form-group">
<?php 
				$conv=$obj->display('dm_ops_conversation','leadid='.$_GET["lead"]);
				 while($conv1=$conv->fetch_array()) 
				{if(trim($conv1['conversation'])!="")
						echo "<p><span>".$conv1['type'].'</span><br/>'.$conv1['conversation'].'<br/><span>'.time_elapsed_string($conv1['date'],1).'</span></p><br/>';
				}
?>
</div>
	</div>	
  <div class="row" style="overflow:hidden">
  	<div class="col-sm-3 form-group"><label>Type of Conversation</label>
	<select class="form-control" name="conversation_type">
		<option value="">Select</option>
		<option value="Walk-in">Walk-in</option>
		<option value="Inbound">Inbound</option>
		<option value="Outbound">Outbound</option>
	</select>
	</div>
	   <div class="col-sm-12 form-group"><label>Conversation</label><textarea type="text" class="form-control" id="conversation" name="conversation"></textarea></div>
	</div>
    </div>

     <!--TAB13--> 

    <div class="tab-pane container" id="tab13">
    	<?php 
    	$up=$op=$obj->display('dm_client_personal',"leadid=".$_GET['lead']);
        $up1=$up->fetch_array();
        ?>
        <?php if($up1['copr']!="")
        { 
        ?>
    	<div class="row">
                  <a href="uploads/clientdocs/<?php echo $up1['copr']; ?>" class="btn btn-success btn-icon-split">
                    <span class="icon text-white-50">
                      <i class="fa fa-check"></i>
                    </span>
                    <span class="text">COPR-<?php echo $up1['copr']; ?></span>
                  </a>
                  <div class="col-sm-3 form-group">
                  <select class="form-control" name="copr_a">
		<option value="">Select</option>
		<option value="1" <?php if($up1['copr_a']=="1"){echo "selected";} ?>>Approved</option>
		<option value="0" <?php if($up1['copr_a']=="0"){echo "selected";} ?>>Rejected</option>
	</select>
                 </div>
             <div class="col-sm-3 form-group">
                  <textarea class="form-control" name="copr_remarks"><?php echo nl2br($up1['copr_remarks']);?></textarea> 
                 </div>
             </div>
                 <?php } ?>
                 
                 <?php if($up1['client_sheet']!="")
        { 
        ?>
    	<div class="row">
                  <a href="uploads/clientdocs/<?php echo $up1['client_sheet']; ?>" class="btn btn-success btn-icon-split">
                    <span class="icon text-white-50">
                      <i class="fa fa-check"></i>
                    </span>
                    <span class="text">Client Datasheet-<?php echo $up1['client_sheet']; ?></span>
                  </a>
                  <div class="col-sm-3 form-group">
                  <select class="form-control" name="client_sheet_a">
		<option value="">Select</option>
		<option value="1" <?php if($up1['client_sheet_a']=="1"){echo "selected";} ?>>Approved</option>
		<option value="0" <?php if($up1['client_sheet_a']=="0"){echo "selected";} ?>>Rejected</option>
	</select>
                 </div> <div class="col-sm-3 form-group">
                  <textarea class="form-control" name="client_sheet_remarks"><?php echo nl2br($up1['client_sheet_remarks']);?></textarea> 
                 </div></div>
                 <?php } ?>

                 <?php if($up1['vphoto']!="")
        { 
        ?>
                 <div class="row">
                  <a href="uploads/clientdocs/<?php echo $up1['vphoto']; ?>" class="btn btn-success btn-icon-split">
                    <span class="icon text-white-50">
                      <i class="fa fa-check"></i>
                    </span>
                    <span class="text">Visa photo-<?php echo $up1['vphoto']; ?></span>
                  </a>
                  <div class="col-sm-3 form-group">
                  <select class="form-control" name="vphoto_a">
		<option value="">Select</option>
		<option value="1" <?php if($up1['vphoto_a']=="1"){echo "selected";} ?>>Approved</option>
		<option value="0" <?php if($up1['vphoto_a']=="0"){echo "selected";} ?>>Rejected</option>
	</select>
                 </div> <div class="col-sm-3 form-group">
                  <textarea class="form-control" name="vphoto_remarks"><?php echo nl2br($up1['vphoto_remarks']);?></textarea> 
                 </div></div>

<?php } ?>

<?php if($up1['final_visa_docfb']!="")
        { 
        ?>
                 <div class="row">
                  <a href="uploads/clientdocs/<?php echo $up1['final_visa_docfb']; ?>" class="btn btn-success btn-icon-split">
                    <span class="icon text-white-50">
                      <i class="fa fa-check"></i>
                    </span>
                    <span class="text">Final Visa Document FB-<?php echo $up1['final_visa_docfb']; ?></span>
                  </a>
                  <div class="col-sm-3 form-group">
                  <select class="form-control" name="final_visa_docfb_a">
		<option value="">Select</option>
		<option value="1" <?php if($up1['final_visa_docfb_a']=="1"){echo "selected";} ?>>Approved</option>
		<option value="0" <?php if($up1['final_visa_docfb_a']=="0"){echo "selected";} ?>>Rejected</option>
	</select>
                 </div> <div class="col-sm-3 form-group">
                  <textarea class="form-control" name="final_visa_docfb_remarks"><?php echo nl2br($up1['final_visa_docfb_remarks']);?></textarea> 
                 </div></div>

<?php } ?>

<?php if($up1['final_visa_docfull']!="")
        { 
        ?>
                 <div class="row">
                  <a href="uploads/clientdocs/<?php echo $up1['final_visa_docfull']; ?>" class="btn btn-success btn-icon-split">
                    <span class="icon text-white-50">
                      <i class="fa fa-check"></i>
                    </span>
                    <span class="text">Final Visa Document Full-<?php echo $up1['final_visa_docfull']; ?></span>
                  </a>
                  <div class="col-sm-3 form-group">
                  <select class="form-control" name="final_visa_docfull_a">
		<option value="">Select</option>
		<option value="1" <?php if($up1['final_visa_docfull_a']=="1"){echo "selected";} ?>>Approved</option>
		<option value="0" <?php if($up1['final_visa_docfull_a']=="0"){echo "selected";} ?>>Rejected</option>
	</select>
                 </div> <div class="col-sm-3 form-group">
                  <textarea class="form-control" name="final_visa_docfull_remarks"><?php echo nl2br($up1['final_visa_docfull_remarks']);?></textarea> 
                 </div></div>

<?php } ?>

<?php if($up1['mcert_re']!="")
        { 
        ?>
                 <div class="row">
                  <a href="uploads/clientdocs/<?php echo $up1['mcert_re']; ?>" class="btn btn-success btn-icon-split">
                    <span class="icon text-white-50">
                      <i class="fa fa-check"></i>
                    </span>
                    <span class="text">Marraige certificafe rescanned-<?php echo $up1['mcert_re']; ?></span>
                  </a>
                  <div class="col-sm-3 form-group">
                  <select class="form-control" name="mcert_re_a">
		<option value="">Select</option>
		<option value="1" <?php if($up1['mcert_re_a']=="1"){echo "selected";} ?>>Approved</option>
		<option value="0" <?php if($up1['mcert_re_a']=="0"){echo "selected";} ?>>Rejected</option>
	</select>
                 </div> <div class="col-sm-3 form-group">
                  <textarea class="form-control" name="mcert_re_remarks"><?php echo nl2br($up1['mcert_re_remarks']);?></textarea> 
                 </div></div>

<?php } ?>

<?php if($up1['bcert']!="")
        { 
        ?>
                 <div class="row">
                  <a href="uploads/clientdocs/<?php echo $up1['bcert']; ?>" class="btn btn-success btn-icon-split">
                    <span class="icon text-white-50">
                      <i class="fa fa-check"></i>
                    </span>
                    <span class="text">Birth Certificate-<?php echo $up1['bcert']; ?></span>
                  </a>
                  <div class="col-sm-3 form-group">
                  <select class="form-control" name="bcert_a">
		<option value="">Select</option>
		<option value="1" <?php if($up1['bcert_a']=="1"){echo "selected";} ?>>Approved</option>
		<option value="0" <?php if($up1['bcert_a']=="0"){echo "selected";} ?>>Rejected</option>
	</select>
                 </div> <div class="col-sm-3 form-group">
                  <textarea class="form-control" name="bcert_remarks"><?php echo nl2br($up1['bcert_remarks']);?></textarea> 
                 </div></div>

<?php } ?>

<?php if($up1['niddoc']!="")
        { 
        ?>
                 <div class="row">
                  <a href="uploads/clientdocs/<?php echo $up1['niddoc']; ?>" class="btn btn-success btn-icon-split">
                    <span class="icon text-white-50">
                      <i class="fa fa-check"></i>
                    </span>
                    <span class="text">National ID-<?php echo $up1['niddoc']; ?></span>
                  </a>
                  <div class="col-sm-3 form-group">
                  <select class="form-control" name="niddoc_a">
		<option value="">Select</option>
		<option value="1" <?php if($up1['niddoc_a']=="1"){echo "selected";} ?>>Approved</option>
		<option value="0" <?php if($up1['niddoc_a']=="0"){echo "selected";} ?>>Rejected</option>
	</select>
                 </div> <div class="col-sm-3 form-group">
                  <textarea class="form-control" name="niddoc_remarks"><?php echo nl2br($up1['niddoc_remarks']);?></textarea> 
                 </div></div>

<?php } ?>

<?php if($up1['marraige']!="")
        { 
        ?>
                 <div class="row">
                  <a href="uploads/clientdocs/<?php echo $up1['marraige']; ?>" class="btn btn-success btn-icon-split">
                    <span class="icon text-white-50">
                      <i class="fa fa-check"></i>
                    </span>
                    <span class="text">Marraige Certificate-<?php echo $up1['marraige']; ?></span>
                  </a>
                  <div class="col-sm-3 form-group">
                  <select class="form-control" name="marraige_a">
		<option value="">Select</option>
		<option value="1" <?php if($up1['marraige_a']=="1"){echo "selected";} ?>>Approved</option>
		<option value="0" <?php if($up1['marraige_a']=="0"){echo "selected";} ?>>Rejected</option>
	</select>
                 </div> <div class="col-sm-3 form-group">
                  <textarea class="form-control" name="marraige_remarks"><?php echo nl2br($up1['marraige_remarks']);?></textarea> 
                 </div></div>

<?php } ?>

<?php if($up1['ielts']!="")
        { 
        ?>
                 <div class="row">
                  <a href="uploads/clientdocs/<?php echo $up1['ielts']; ?>" class="btn btn-success btn-icon-split">
                    <span class="icon text-white-50">
                      <i class="fa fa-check"></i>
                    </span>
                    <span class="text">IELTS-<?php echo $up1['ielts']; ?></span>
                  </a>
                  <div class="col-sm-3 form-group">
                  <select class="form-control" name="ielts_a">
		<option value="">Select</option>
		<option value="1" <?php if($up1['ielts_a']=="1"){echo "selected";} ?>>Approved</option>
		<option value="0" <?php if($up1['ielts_a']=="0"){echo "selected";} ?>>Rejected</option>
	</select>
                 </div> <div class="col-sm-3 form-group">
                  <textarea class="form-control" name="ielts_remarks"><?php echo nl2br($up1['ielts_remarks']);?></textarea> 
                 </div></div>

<?php } ?>

<?php if($up1['passport']!="")
        { 
        ?>
                 <div class="row">
                  <a href="uploads/clientdocs/<?php echo $up1['passport']; ?>" class="btn btn-success btn-icon-split">
                    <span class="icon text-white-50">
                      <i class="fa fa-check"></i>
                    </span>
                    <span class="text">Passport-<?php echo $up1['passport']; ?></span>
                  </a>
                  <div class="col-sm-3 form-group">
                  <select class="form-control" name="passport_a">
		<option value="">Select</option>
		<option value="1" <?php if($up1['passport_a']=="1"){echo "selected";} ?>>Approved</option>
		<option value="0" <?php if($up1['passport_a']=="0"){echo "selected";} ?>>Rejected</option>
	</select>
                 </div> <div class="col-sm-3 form-group">
                  <textarea class="form-control" name="passport_remarks"><?php echo nl2br($up1['passport_remarks']);?></textarea> 
                 </div></div>

<?php } ?>

<?php if($up1['passport_new']!="")
        { 
        ?>
                 <div class="row">
                  <a href="uploads/clientdocs/<?php echo $up1['passport_new']; ?>" class="btn btn-success btn-icon-split">
                    <span class="icon text-white-50">
                      <i class="fa fa-check"></i>
                    </span>
                    <span class="text">Passport New-<?php echo $up1['passport_new']; ?></span>
                  </a>
                  <div class="col-sm-3 form-group">
                  <select class="form-control" name="passport_new_a">
		<option value="">Select</option>
		<option value="1" <?php if($up1['passport_new_a']=="1"){echo "selected";} ?>>Approved</option>
		<option value="0" <?php if($up1['passport_new_a']=="0"){echo "selected";} ?>>Rejected</option>
	</select>
                 </div> <div class="col-sm-3 form-group">
                  <textarea class="form-control" name="passport_new_remarks"><?php echo nl2br($up1['passport_new_remarks']);?></textarea> 
                 </div></div>

<?php } ?>

<?php if($up1['pcc']!="")
        { 
        ?>
                 <div class="row">
                  <a href="uploads/clientdocs/<?php echo $up1['pcc']; ?>" class="btn btn-success btn-icon-split">
                    <span class="icon text-white-50">
                      <i class="fa fa-check"></i>
                    </span>
                    <span class="text">PCC-<?php echo $up1['pcc']; ?></span>
                  </a>
                  <div class="col-sm-3 form-group">
                  <select class="form-control" name="pcc_a">
		<option value="">Select</option>
		<option value="1" <?php if($up1['pcc_a']=="1"){echo "selected";} ?>>Approved</option>
		<option value="0" <?php if($up1['pcc_a']=="0"){echo "selected";} ?>>Rejected</option>
	</select>
                 </div> <div class="col-sm-3 form-group">
                  <textarea class="form-control" name="pcc_remarks"><?php echo nl2br($up1['pcc_remarks']);?></textarea> 
                 </div></div>

<?php } ?>

<?php if($up1['photo']!="")
        { 
        ?>
                 <div class="row">
                  <a href="uploads/clientdocs/<?php echo $up1['photo']; ?>" class="btn btn-success btn-icon-split">
                    <span class="icon text-white-50">
                      <i class="fa fa-check"></i>
                    </span>
                    <span class="text">Photo-<?php echo $up1['photo']; ?></span>
                  </a>
                  <div class="col-sm-3 form-group">
                  <select class="form-control" name="photo_a">
		<option value="">Select</option>
		<option value="1" <?php if($up1['photo_a']=="1"){echo "selected";} ?>>Approved</option>
		<option value="0" <?php if($up1['photo_a']=="0"){echo "selected";} ?>>Rejected</option>
	</select>
                 </div> <div class="col-sm-3 form-group">
                  <textarea class="form-control" name="photo_remarks"><?php echo nl2br($up1['photo_remarks']);?></textarea> 
                 </div></div>

<?php } ?>

<?php if($up1['resume']!="")
        { 
        ?>
                 <div class="row">
                  <a href="uploads/clientdocs/<?php echo $up1['resume']; ?>" class="btn btn-success btn-icon-split">
                    <span class="icon text-white-50">
                      <i class="fa fa-check"></i>
                    </span>
                    <span class="text">Resume-<?php echo $up1['resume']; ?></span>
                  </a>
                  <div class="col-sm-3 form-group">
                  <select class="form-control" name="resume_a">
		<option value="">Select</option>
		<option value="1" <?php if($up1['resume_a']=="1"){echo "selected";} ?>>Approved</option>
		<option value="0" <?php if($up1['resume_a']=="0"){echo "selected";} ?>>Rejected</option>
	</select>
                 </div> <div class="col-sm-3 form-group">
                  <textarea class="form-control" name="resume_remarks"><?php echo nl2br($up1['resume_remarks']);?></textarea> 
                 </div></div>

<?php } ?>
<input type="hidden" name="misc_count" value="<?php echo $mf1->num_rows;?>">
<?php 
$i=1;
$misc_files=array();
 if ($mf1->num_rows > 0 ) {

                      while($mf = $mf1->fetch_assoc()) {
                      	if($mf['category']=='cp'){?>
                      	<div class="row">
			                  <a href="uploads/clientdocs/<?php echo $mf['file_name']; ?>" class="btn btn-success btn-icon-split">
			                    <span class="icon text-white-50">
			                      <i class="fa fa-check"></i>
			                    </span>
			                    <span class="text"><?php echo $mf['file_name']; ?></span>
			                  </a>
				            <div class="col-sm-3 form-group">
				                <select class="form-control" name="approval<?php echo $i; ?>">
									<option value="">Select</option>
									<option value="1" <?php if($mf['approval']=="1"){echo "selected";} ?>>Approved</option>
									<option value="0" <?php if($mf['approval']=="0"){echo "selected";} ?>>Rejected</option>
								</select>
							</div>
							<div class="col-sm-3 form-group">
                  <textarea class="form-control" name="remarks<?php echo $i; ?>"><?php echo nl2br($mf['remarks']);?></textarea> 
                 </div>
						</div>
			          <input type="hidden" name="id<?php echo $i; ?>" value="<?php echo $mf['id']; ?>">    
                <?php $i++;}
            array_push($misc_files, $mf);  } 
          }
            ?>

</div>

<!-- tab15 -->

<div class="tab-pane container" id="tab15">
    	<?php 
    	$upe=$op=$obj->display('dm_client_edu',"leadid=".$_GET['lead']);
        $upe1=$upe->fetch_array();
        ?>
        <label><strong>Masters</strong></label>
       <div id="master-div" style="padding-left: 20px">
        <?php if($upe1['con_mark_sheet_m']!="")
        { 
        ?>
    	<div class="row">
                  <a href="uploads/clientdocs/<?php echo $upe1['con_mark_sheet_m']; ?>" class="btn btn-success btn-icon-split">
                    <span class="icon text-white-50">
                      <i class="fa fa-check"></i>
                    </span>
                    <span class="text">Consolidated Mark sheet (Masters)-<?php echo $upe1['con_mark_sheet_m']; ?></span>
                  </a>
                  <div class="col-sm-3 form-group">
                  <select class="form-control" name="con_mark_sheet_m_a">
		<option value="">Select</option>
		<option value="1" <?php if($upe1['con_mark_sheet_m_a']=="1"){echo "selected";} ?>>Approved</option>
		<option value="0" <?php if($upe1['con_mark_sheet_m_a']=="0"){echo "selected";} ?>>Rejected</option>
	</select>
                 </div><div class="col-sm-3 form-group">
                  <textarea class="form-control" name="con_mark_sheet_m_remarks"><?php echo nl2br($upe1['con_mark_sheet_m_remarks']);?></textarea> 
                 </div></div>
                 <?php } ?>
<?php if($upe1['ind_mark_sheet_m']!="")
        { 
        ?>
                 <div class="row">
                  <a href="uploads/clientdocs/<?php echo $upe1['ind_mark_sheet_m']; ?>" class="btn btn-success btn-icon-split">
                    <span class="icon text-white-50">
                      <i class="fa fa-check"></i>
                    </span>
                    <span class="text">Individual Mark Sheet (Masters)-<?php echo $upe1['ind_mark_sheet_m']; ?></span>
                  </a>
                  <div class="col-sm-3 form-group">
                  <select class="form-control" name="ind_mark_sheet_m_a">
		<option value="">Select</option>
		<option value="1" <?php if($upe1['ind_mark_sheet_m_a']=="1"){echo "selected";} ?>>Approved</option>
		<option value="0" <?php if($upe1['ind_mark_sheet_m_a']=="0"){echo "selected";} ?>>Rejected</option>
	</select>
                 </div><div class="col-sm-3 form-group">
                  <textarea class="form-control" name="ind_mark_sheet_m_remarks"><?php echo nl2br($upe1['ind_mark_sheet_m_remarks']);?></textarea> 
                 </div></div>

<?php } ?>
<?php if($upe1['conv_cert_m']!="")
        { 
        ?>
                 <div class="row">
                  <a href="uploads/clientdocs/<?php echo $upe1['conv_cert_m']; ?>" class="btn btn-success btn-icon-split">
                    <span class="icon text-white-50">
                      <i class="fa fa-check"></i>
                    </span>
                    <span class="text">Convocation Certificate-<?php echo $upe1['conv_cert_m']; ?></span>
                  </a>
                  <div class="col-sm-3 form-group">
                  <select class="form-control" name="conv_cert_m_a">
		<option value="">Select</option>
		<option value="1" <?php if($upe1['conv_cert_m_a']=="1"){echo "selected";} ?>>Approved</option>
		<option value="0" <?php if($upe1['conv_cert_m_a']=="0"){echo "selected";} ?>>Rejected</option>
	</select>
                 </div><div class="col-sm-3 form-group">
                  <textarea class="form-control" name="conv_cert_m_remarks"><?php echo nl2br($upe1['conv_cert_m_remarks']);?></textarea> 
                 </div></div>

<?php } ?>
</div>
<label><strong>Bachelors</strong></label>
                  <div id="bachelors-div" style="padding-left: 20px">
                 <?php if($upe1['con_mark_sheet_b']!="")
        { 
        ?>
                 <div class="row">
                  <a href="uploads/clientdocs/<?php echo $upe1['con_mark_sheet_b']; ?>" class="btn btn-success btn-icon-split">
                    <span class="icon text-white-50">
                      <i class="fa fa-check"></i>
                    </span>
                    <span class="text">Consolidated Mark sheet (Bachelor's)-<?php echo $upe1['con_mark_sheet_b']; ?></span>
                  </a>
                  <div class="col-sm-3 form-group">
                  <select class="form-control" name="con_mark_sheet_b_a">
		<option value="">Select</option>
		<option value="1" <?php if($upe1['con_mark_sheet_b_a']=="1"){echo "selected";} ?>>Approved</option>
		<option value="0" <?php if($upe1['con_mark_sheet_b_a']=="0"){echo "selected";} ?>>Rejected</option>
	</select>
                 </div><div class="col-sm-3 form-group">
                  <textarea class="form-control" name="con_mark_sheet_b_remarks"><?php echo nl2br($upe1['con_mark_sheet_b_remarks']);?></textarea> 
                 </div></div>

<?php } ?>

<?php if($upe1['ind_mark_sheet_b']!="")
        { 
        ?>
                 <div class="row">
                  <a href="uploads/clientdocs/<?php echo $upe1['ind_mark_sheet_b']; ?>" class="btn btn-success btn-icon-split">
                    <span class="icon text-white-50">
                      <i class="fa fa-check"></i>
                    </span>
                    <span class="text">Individual Mark Sheet (Bachelors)-<?php echo $upe1['ind_mark_sheet_b']; ?></span>
                  </a>
                  <div class="col-sm-3 form-group">
                  <select class="form-control" name="ind_mark_sheet_b_a">
		<option value="">Select</option>
		<option value="1" <?php if($upe1['ind_mark_sheet_b_a']=="1"){echo "selected";} ?>>Approved</option>
		<option value="0" <?php if($upe1['ind_mark_sheet_b_a']=="0"){echo "selected";} ?>>Rejected</option>
	</select>
                 </div><div class="col-sm-3 form-group">
                  <textarea class="form-control" name="ind_mark_sheet_b_remarks"><?php echo nl2br($upe1['ind_mark_sheet_b_remarks']);?></textarea> 
                 </div></div>

<?php } ?>

<?php if($upe1['conv_cert_b']!="")
        { 
        ?>
                 <div class="row">
                  <a href="uploads/clientdocs/<?php echo $upe1['conv_cert_b']; ?>" class="btn btn-success btn-icon-split">
                    <span class="icon text-white-50">
                      <i class="fa fa-check"></i>
                    </span>
                    <span class="text">Convocation Certificate-<?php echo $upe1['conv_cert_b']; ?></span>
                  </a>
                  <div class="col-sm-3 form-group">
                  <select class="form-control" name="conv_cert_b_a">
		<option value="">Select</option>
		<option value="1" <?php if($upe1['conv_cert_b_a']=="1"){echo "selected";} ?>>Approved</option>
		<option value="0" <?php if($upe1['conv_cert_b_a']=="0"){echo "selected";} ?>>Rejected</option>
	</select>
                 </div><div class="col-sm-3 form-group">
                  <textarea class="form-control" name="conv_cert_b_remarks"><?php echo nl2br($upe1['conv_cert_b_remarks']);?></textarea> 
                 </div></div>

<?php } ?>
</div>
<label><strong>Others</strong></label>
                  <div id="others-div" style="padding-left: 20px">
<?php if($upe1['eca_m']!="")
        { 
        ?>
                 <div class="row">
                  <a href="uploads/clientdocs/<?php echo $upe1['eca_m']; ?>" class="btn btn-success btn-icon-split">
                    <span class="icon text-white-50">
                      <i class="fa fa-check"></i>
                    </span>
                    <span class="text">ECA Report(Masters)-<?php echo $upe1['eca_m']; ?></span>
                  </a>
                  <div class="col-sm-3 form-group">
                  <select class="form-control" name="eca_m_a">
		<option value="">Select</option>
		<option value="1" <?php if($upe1['eca_m_a']=="1"){echo "selected";} ?>>Approved</option>
		<option value="0" <?php if($upe1['eca_m_a']=="0"){echo "selected";} ?>>Rejected</option>
	</select>
                 </div><div class="col-sm-3 form-group">
                  <textarea class="form-control" name="eca_m_remarks"><?php echo nl2br($upe1['eca_m_remarks']);?></textarea> 
                 </div></div>

<?php } ?>
<?php if($upe1['revised_eca_m']!="")
        { 
        ?>
                 <div class="row">
                  <a href="uploads/clientdocs/<?php echo $upe1['revised_eca_m']; ?>" class="btn btn-success btn-icon-split">
                    <span class="icon text-white-50">
                      <i class="fa fa-check"></i>
                    </span>
                    <span class="text">Revised ECA Report(Masters)-<?php echo $upe1['revised_eca_m']; ?></span>
                  </a>
                  <div class="col-sm-3 form-group">
                  <select class="form-control" name="revised_eca_m_a">
		<option value="">Select</option>
		<option value="1" <?php if($upe1['revised_eca_m_a']=="1"){echo "selected";} ?>>Approved</option>
		<option value="0" <?php if($upe1['revised_eca_m_a']=="0"){echo "selected";} ?>>Rejected</option>
	</select>
                 </div><div class="col-sm-3 form-group">
                  <textarea class="form-control" name="revised_eca_m_remarks"><?php echo nl2br($upe1['revised_eca_m_remarks']);?></textarea> 
                 </div></div>

<?php } ?>

<?php if($upe1['revised_wes_eca_m']!="")
        { 
        ?>
                 <div class="row">
                  <a href="uploads/clientdocs/<?php echo $upe1['revised_wes_eca_m']; ?>" class="btn btn-success btn-icon-split">
                    <span class="icon text-white-50">
                      <i class="fa fa-check"></i>
                    </span>
                    <span class="text">Revised WES ECA Report(Masters)-<?php echo $upe1['revised_wes_eca_m']; ?></span>
                  </a>
                  <div class="col-sm-3 form-group">
                  <select class="form-control" name="revised_wes_eca_m_a">
		<option value="">Select</option>
		<option value="1" <?php if($upe1['revised_wes_eca_m_a']=="1"){echo "selected";} ?>>Approved</option>
		<option value="0" <?php if($upe1['revised_wes_eca_m_a']=="0"){echo "selected";} ?>>Rejected</option>
	</select>
                 </div><div class="col-sm-3 form-group">
                  <textarea class="form-control" name="revised_wes_eca_m_remarks"><?php echo nl2br($upe1['revised_wes_eca_m_remarks']);?></textarea> 
                 </div></div>

<?php } ?>

<?php if($upe1['eca_b']!="")
        { 
        ?>
                 <div class="row">
                  <a href="uploads/clientdocs/<?php echo $upe1['eca_b']; ?>" class="btn btn-success btn-icon-split">
                    <span class="icon text-white-50">
                      <i class="fa fa-check"></i>
                    </span>
                    <span class="text">ECA Report (Bachelors)-<?php echo $upe1['eca_b']; ?></span>
                  </a>
                  <div class="col-sm-3 form-group">
                  <select class="form-control" name="eca_b_a">
		<option value="">Select</option>
		<option value="1" <?php if($upe1['eca_b_a']=="1"){echo "selected";} ?>>Approved</option>
		<option value="0" <?php if($upe1['eca_b_a']=="0"){echo "selected";} ?>>Rejected</option>
	</select>
                 </div><div class="col-sm-3 form-group">
                  <textarea class="form-control" name="eca_b_remarks"><?php echo nl2br($upe1['eca_b_remarks']);?></textarea> 
                 </div></div>

<?php } ?>

<?php if($upe1['revised_eca_b']!="")
        { 
        ?>
                 <div class="row">
                  <a href="uploads/clientdocs/<?php echo $upe1['revised_eca_b']; ?>" class="btn btn-success btn-icon-split">
                    <span class="icon text-white-50">
                      <i class="fa fa-check"></i>
                    </span>
                    <span class="text">Revised ECA Report(Bachelors)-<?php echo $upe1['revised_eca_b']; ?></span>
                  </a>
                  <div class="col-sm-3 form-group">
                  <select class="form-control" name="revised_eca_b_a">
		<option value="">Select</option>
		<option value="1" <?php if($upe1['revised_eca_b_a']=="1"){echo "selected";} ?>>Approved</option>
		<option value="0" <?php if($upe1['revised_eca_b_a']=="0"){echo "selected";} ?>>Rejected</option>
	</select>
                 </div><div class="col-sm-3 form-group">
                  <textarea class="form-control" name="revised_eca_b_remarks"><?php echo nl2br($upe1['revised_eca_b_remarks']);?></textarea> 
                 </div></div>

<?php } ?>


<?php if($upe1['revised_wes_eca_b']!="")
        { 
        ?>
                 <div class="row">
                  <a href="uploads/clientdocs/<?php echo $upe1['revised_wes_eca_b']; ?>" class="btn btn-success btn-icon-split">
                    <span class="icon text-white-50">
                      <i class="fa fa-check"></i>
                    </span>
                    <span class="text">Revised WES ECA Report(Bachelors)-<?php echo $upe1['revised_wes_eca_b']; ?></span>
                  </a>
                  <div class="col-sm-3 form-group">
                  <select class="form-control" name="revised_wes_eca_b_a">
		<option value="">Select</option>
		<option value="1" <?php if($upe1['revised_wes_eca_b_a']=="1"){echo "selected";} ?>>Approved</option>
		<option value="0" <?php if($upe1['revised_wes_eca_b_a']=="0"){echo "selected";} ?>>Rejected</option>
	</select>
                 </div><div class="col-sm-3 form-group">
                  <textarea class="form-control" name="revised_wes_eca_b_remarks"><?php echo nl2br($upe1['revised_wes_eca_b_remarks']);?></textarea> 
                 </div></div>

<?php } ?>


<?php if($upe1['intermediate']!="")
        { 
        ?>
                 <div class="row">
                  <a href="uploads/clientdocs/<?php echo $upe1['intermediate']; ?>" class="btn btn-success btn-icon-split">
                    <span class="icon text-white-50">
                      <i class="fa fa-check"></i>
                    </span>
                    <span class="text">Intermediate-<?php echo $upe1['intermediate']; ?></span>
                  </a>
                  <div class="col-sm-3 form-group">
                  <select class="form-control" name="intermediate_a">
		<option value="">Select</option>
		<option value="1" <?php if($upe1['intermediate_a']=="1"){echo "selected";} ?>>Approved</option>
		<option value="0" <?php if($upe1['intermediate_a']=="0"){echo "selected";} ?>>Rejected</option>
	</select>
                 </div><div class="col-sm-3 form-group">
                  <textarea class="form-control" name="intermediate_remarks"><?php echo nl2br($upe1['intermediate_remarks']);?></textarea> 
                 </div></div>

<?php } ?>

<?php if($upe1['ssc']!="")
        { 
        ?>
                 <div class="row">
                  <a href="uploads/clientdocs/<?php echo $upe1['ssc']; ?>" class="btn btn-success btn-icon-split">
                    <span class="icon text-white-50">
                      <i class="fa fa-check"></i>
                    </span>
                    <span class="text">SSC-<?php echo $upe1['ssc']; ?></span>
                  </a>
                  <div class="col-sm-3 form-group">
                  <select class="form-control" name="ssc_a">
		<option value="">Select</option>
		<option value="1" <?php if($upe1['ssc_a']=="1"){echo "selected";} ?>>Approved</option>
		<option value="0" <?php if($upe1['ssc_a']=="0"){echo "selected";} ?>>Rejected</option>
	</select>
                 </div><div class="col-sm-3 form-group">
                  <textarea class="form-control" name="ssc_remarks"><?php echo nl2br($upe1['ssc_remarks']);?></textarea> 
                 </div></div>

<?php } ?>
<?php if($upe1['bach_seal_trans_unv']!="")
        { 
        ?>
                 <div class="row">
                  <a href="uploads/clientdocs/<?php echo $upe1['bach_seal_trans_unv']; ?>" class="btn btn-success btn-icon-split">
                    <span class="icon text-white-50">
                      <i class="fa fa-check"></i>
                    </span>
                    <span class="text">Sealed Transcript From University (Bachelors)-<?php echo $upe1['bach_seal_trans_unv']; ?></span>
                  </a>
                  <div class="col-sm-3 form-group">
                  <select class="form-control" name="bach_seal_trans_unv_a">
		<option value="">Select</option>
		<option value="1" <?php if($upe1['bach_seal_trans_unv_a']=="1"){echo "selected";} ?>>Approved</option>
		<option value="0" <?php if($upe1['bach_seal_trans_unv_a']=="0"){echo "selected";} ?>>Rejected</option>
	</select>
                 </div><div class="col-sm-3 form-group">
                  <textarea class="form-control" name="bach_seal_trans_unv_remarks"><?php echo nl2br($upe1['bach_seal_trans_unv_remarks']);?></textarea> 
                 </div></div>

<?php } ?>
</div>
<label><strong>Miscellaneous</strong></label>
                  <div id="misc-div" style="padding-left: 20px">
<?php
 if (count($misc_files) > 0 ) {

                      foreach ($misc_files as $mf) {
                      	// print_r($misc_files);
                      	if($mf['category']=='ce'){?>
                      	<div class="row">
			                  <a href="uploads/clientdocs/<?php echo $mf['file_name']; ?>" class="btn btn-success btn-icon-split">
			                    <span class="icon text-white-50">
			                      <i class="fa fa-check"></i>
			                    </span>
			                    <span class="text"><?php echo $mf['file_name']; ?></span>
			                  </a>
				            <div class="col-sm-3 form-group">
				                <select class="form-control" name="approval<?php echo $i; ?>">
									<option value="">Select</option>
									<option value="1" <?php if($mf['approval']=="1"){echo "selected";} ?>>Approved</option>
									<option value="0" <?php if($mf['approval']=="0"){echo "selected";} ?>>Rejected</option>
								</select>
							</div>
							<div class="col-sm-3 form-group">
                  <textarea class="form-control" name="remarks<?php echo $i; ?>"><?php echo nl2br($mf['remarks']);?></textarea>
						</div>
					</div>
			          <input type="hidden" name="id<?php echo $i; ?>" value="<?php echo $mf['id']; ?>">    
                <?php $i++;}
              } 
          }
            ?>

</div>
</div>
     <!--TAB16--> 

    <div class="tab-pane container" id="tab16">
    	<?php 
    	$ups=$op=$obj->display('dm_spouse_personal',"leadid=".$_GET['lead']);
        $ups1=$ups->fetch_array();
        ?>
        <?php if($ups1['copr']!="")
        { 
        ?>
    	<div class="row">
                  <a href="uploads/spousedocs/<?php echo $ups1['copr']; ?>" class="btn btn-success btn-icon-split">
                    <span class="icon text-white-50">
                      <i class="fa fa-check"></i>
                    </span>
                    <span class="text">COPR-<?php echo $ups1['copr']; ?></span>
                  </a>
                  <div class="col-sm-3 form-group">
                  <select class="form-control" name="copr_a_s">
		<option value="">Select</option>
		<option value="1" <?php if($ups1['copr_a']=="1"){echo "selected";} ?>>Approved</option>
		<option value="0" <?php if($ups1['copr_a']=="0"){echo "selected";} ?>>Rejected</option>
	</select>
                 </div><div class="col-sm-3 form-group">
                  <textarea class="form-control" name="copr_remarks_s"><?php echo nl2br($ups1['copr_remarks']);?></textarea> 
                 </div></div>
                 <?php } ?>

                 <?php if($ups1['vphoto']!="")
        { 
        ?>
                 <div class="row">
                  <a href="uploads/spousedocs/<?php echo $ups1['vphoto']; ?>" class="btn btn-success btn-icon-split">
                    <span class="icon text-white-50">
                      <i class="fa fa-check"></i>
                    </span>
                    <span class="text">Visa photo-<?php echo $ups1['vphoto']; ?></span>
                  </a>
                  <div class="col-sm-3 form-group">
                  <select class="form-control" name="vphoto_a_s">
		<option value="">Select</option>
		<option value="1" <?php if($ups1['vphoto_a']=="1"){echo "selected";} ?>>Approved</option>
		<option value="0" <?php if($ups1['vphoto_a']=="0"){echo "selected";} ?>>Rejected</option>
	</select>
                 </div><div class="col-sm-3 form-group">
                  <textarea class="form-control" name="vphoto_remarks_s"><?php echo nl2br($ups1['vphoto_remarks']);?></textarea> 
                 </div></div>

<?php } ?>

<?php if($ups1['final_visa_docfb']!="")
        { 
        ?>
                 <div class="row">
                  <a href="uploads/spousedocs/<?php echo $ups1['final_visa_docfb']; ?>" class="btn btn-success btn-icon-split">
                    <span class="icon text-white-50">
                      <i class="fa fa-check"></i>
                    </span>
                    <span class="text">Final Visa Document FB-<?php echo $ups1['final_visa_docfb']; ?></span>
                  </a>
                  <div class="col-sm-3 form-group">
                  <select class="form-control" name="final_visa_docfb_a_s">
		<option value="">Select</option>
		<option value="1" <?php if($ups1['final_visa_docfb_a']=="1"){echo "selected";} ?>>Approved</option>
		<option value="0" <?php if($ups1['final_visa_docfb_a']=="0"){echo "selected";} ?>>Rejected</option>
	</select>
                 </div><div class="col-sm-3 form-group">
                  <textarea class="form-control" name="final_visa_docfb_remarks_s"><?php echo nl2br($ups1['final_visa_docfb_remarks']);?></textarea> 
                 </div></div>

<?php } ?>

<?php if($ups1['final_visa_docfull']!="")
        { 
        ?>
                 <div class="row">
                  <a href="uploads/spousedocs/<?php echo $ups1['final_visa_docfull']; ?>" class="btn btn-success btn-icon-split">
                    <span class="icon text-white-50">
                      <i class="fa fa-check"></i>
                    </span>
                    <span class="text">Final Visa Document Full-<?php echo $ups1['final_visa_docfull']; ?></span>
                  </a>
                  <div class="col-sm-3 form-group">
                  <select class="form-control" name="final_visa_docfull_a_s">
		<option value="">Select</option>
		<option value="1" <?php if($ups1['final_visa_docfull_a']=="1"){echo "selected";} ?>>Approved</option>
		<option value="0" <?php if($ups1['final_visa_docfull_a']=="0"){echo "selected";} ?>>Rejected</option>
	</select>
                 </div><div class="col-sm-3 form-group">
                  <textarea class="form-control" name="final_visa_docfull_remarks_s"><?php echo nl2br($ups1['final_visa_docfull_remarks']);?></textarea> 
                 </div></div>

<?php } ?>



<?php if($ups1['bcert']!="")
        { 
        ?>
                 <div class="row">
                  <a href="uploads/spousedocs/<?php echo $ups1['bcert']; ?>" class="btn btn-success btn-icon-split">
                    <span class="icon text-white-50">
                      <i class="fa fa-check"></i>
                    </span>
                    <span class="text">Birth Certificate-<?php echo $ups1['bcert']; ?></span>
                  </a>
                  <div class="col-sm-3 form-group">
                  <select class="form-control" name="bcert_a_s">
		<option value="">Select</option>
		<option value="1" <?php if($ups1['bcert_a']=="1"){echo "selected";} ?>>Approved</option>
		<option value="0" <?php if($ups1['bcert_a']=="0"){echo "selected";} ?>>Rejected</option>
	</select>
                 </div><div class="col-sm-3 form-group">
                  <textarea class="form-control" name="bcert_remarks_s"><?php echo nl2br($ups1['bcert_remarks']);?></textarea> 
                 </div></div>

<?php } ?>

<?php if($ups1['niddoc']!="")
        { 
        ?>
                 <div class="row">
                  <a href="uploads/spousedocs/<?php echo $ups1['niddoc']; ?>" class="btn btn-success btn-icon-split">
                    <span class="icon text-white-50">
                      <i class="fa fa-check"></i>
                    </span>
                    <span class="text">National ID-<?php echo $ups1['niddoc']; ?></span>
                  </a>
                  <div class="col-sm-3 form-group">
                  <select class="form-control" name="niddoc_a_s">
		<option value="">Select</option>
		<option value="1" <?php if($ups1['niddoc_a']=="1"){echo "selected";} ?>>Approved</option>
		<option value="0" <?php if($ups1['niddoc_a']=="0"){echo "selected";} ?>>Rejected</option>
	</select>
                 </div><div class="col-sm-3 form-group">
                  <textarea class="form-control" name="niddoc_remarks_s"><?php echo nl2br($ups1['niddoc_remarks']);?></textarea> 
                 </div></div>

<?php } ?>

<?php if($ups1['ielts']!="")
        { 
        ?>
                 <div class="row">
                  <a href="uploads/spousedocs/<?php echo $ups1['ielts']; ?>" class="btn btn-success btn-icon-split">
                    <span class="icon text-white-50">
                      <i class="fa fa-check"></i>
                    </span>
                    <span class="text">IELTS-<?php echo $ups1['ielts']; ?></span>
                  </a>
                  <div class="col-sm-3 form-group">
                  <select class="form-control" name="ielts_a_s">
		<option value="">Select</option>
		<option value="1" <?php if($ups1['ielts_a']=="1"){echo "selected";} ?>>Approved</option>
		<option value="0" <?php if($ups1['ielts_a']=="0"){echo "selected";} ?>>Rejected</option>
	</select>
                 </div><div class="col-sm-3 form-group">
                  <textarea class="form-control" name="ielts_remarks_s"><?php echo nl2br($ups1['ielts_remarks']);?></textarea> 
                 </div></div>

<?php } ?>

<?php if($ups1['passport']!="")
        { 
        ?>
                 <div class="row">
                  <a href="uploads/spousedocs/<?php echo $ups1['passport']; ?>" class="btn btn-success btn-icon-split">
                    <span class="icon text-white-50">
                      <i class="fa fa-check"></i>
                    </span>
                    <span class="text">Passport-<?php echo $ups1['passport']; ?></span>
                  </a>
                  <div class="col-sm-3 form-group">
                  <select class="form-control" name="passport_a_s">
		<option value="">Select</option>
		<option value="1" <?php if($ups1['passport_a']=="1"){echo "selected";} ?>>Approved</option>
		<option value="0" <?php if($ups1['passport_a']=="0"){echo "selected";} ?>>Rejected</option>
	</select>
                 </div><div class="col-sm-3 form-group">
                  <textarea class="form-control" name="passport_remarks_s"><?php echo nl2br($ups1['passport_remarks']);?></textarea> 
                 </div></div>

<?php } ?>

<?php if($ups1['passport_new']!="")
        { 
        ?>
                 <div class="row">
                  <a href="uploads/spousedocs/<?php echo $ups1['passport_new']; ?>" class="btn btn-success btn-icon-split">
                    <span class="icon text-white-50">
                      <i class="fa fa-check"></i>
                    </span>
                    <span class="text">Passport New-<?php echo $up1['passport_new']; ?></span>
                  </a>
                  <div class="col-sm-3 form-group">
                  <select class="form-control" name="passport_new_a_s">
		<option value="">Select</option>
		<option value="1" <?php if($ups1['passport_new_a']=="1"){echo "selected";} ?>>Approved</option>
		<option value="0" <?php if($ups1['passport_new_a']=="0"){echo "selected";} ?>>Rejected</option>
	</select>
                 </div><div class="col-sm-3 form-group">
                  <textarea class="form-control" name="passport_new_remarks_s"><?php echo nl2br($ups1['passport_new_remarks']);?></textarea> 
                 </div></div>

<?php } ?>

<?php if($ups1['pcc']!="")
        { 
        ?>
                 <div class="row">
                  <a href="uploads/spousedocs/<?php echo $ups1['pcc']; ?>" class="btn btn-success btn-icon-split">
                    <span class="icon text-white-50">
                      <i class="fa fa-check"></i>
                    </span>
                    <span class="text">PCC-<?php echo $ups1['pcc']; ?></span>
                  </a>
                  <div class="col-sm-3 form-group">
                  <select class="form-control" name="pcc_a_s">
		<option value="">Select</option>
		<option value="1" <?php if($ups1['pcc_a']=="1"){echo "selected";} ?>>Approved</option>
		<option value="0" <?php if($ups1['pcc_a']=="0"){echo "selected";} ?>>Rejected</option>
	</select>
                 </div><div class="col-sm-3 form-group">
                  <textarea class="form-control" name="pcc_remarks_s"><?php echo nl2br($ups1['pcc_remarks']);?></textarea> 
                 </div></div>

<?php } ?>

<?php if($ups1['photo']!="")
        { 
        ?>
                 <div class="row">
                  <a href="uploads/spousedocs/<?php echo $ups1['photo']; ?>" class="btn btn-success btn-icon-split">
                    <span class="icon text-white-50">
                      <i class="fa fa-check"></i>
                    </span>
                    <span class="text">Photo-<?php echo $ups1['photo']; ?></span>
                  </a>
                  <div class="col-sm-3 form-group">
                  <select class="form-control" name="photo_a_s">
		<option value="">Select</option>
		<option value="1" <?php if($ups1['photo_a']=="1"){echo "selected";} ?>>Approved</option>
		<option value="0" <?php if($ups1['photo_a']=="0"){echo "selected";} ?>>Rejected</option>
	</select>
                 </div><div class="col-sm-3 form-group">
                  <textarea class="form-control" name="photo_remarks_s"><?php echo nl2br($ups1['photo_remarks']);?></textarea> 
                 </div></div>

<?php } ?>

<?php if($ups1['resume']!="")
        { 
        ?>
                 <div class="row">
                  <a href="uploads/spousedocs/<?php echo $ups1['resume']; ?>" class="btn btn-success btn-icon-split">
                    <span class="icon text-white-50">
                      <i class="fa fa-check"></i>
                    </span>
                    <span class="text">Resume-<?php echo $ups1['resume']; ?></span>
                  </a>
                  <div class="col-sm-3 form-group">
                  <select class="form-control" name="resume_a_s">
		<option value="">Select</option>
		<option value="1" <?php if($ups1['resume_a']=="1"){echo "selected";} ?>>Approved</option>
		<option value="0" <?php if($ups1['resume_a']=="0"){echo "selected";} ?>>Rejected</option>
	</select>
                 </div><div class="col-sm-3 form-group">
                  <textarea class="form-control" name="resume_remarks_s"><?php echo nl2br($ups1['resume_remarks']);?></textarea> 
                 </div></div>

<?php } ?>
<?php 
if (count($misc_files) > 0 ) {
	foreach ($misc_files as $mf) {
  	if($mf['category']=='sp'){?>
  	<div class="row">
          <a href="uploads/spousedocs/<?php echo $mf['file_name']; ?>" class="btn btn-success btn-icon-split">
            <span class="icon text-white-50">
              <i class="fa fa-check"></i>
            </span>
            <span class="text"><?php echo $mf['file_name']; ?></span>
          </a>
        <div class="col-sm-3 form-group">
            <select class="form-control" name="approval<?php echo $i; ?>">
				<option value="">Select</option>
				<option value="1" <?php if($mf['approval']=="1"){echo "selected";} ?>>Approved</option>
				<option value="0" <?php if($mf['approval']=="0"){echo "selected";} ?>>Rejected</option>
			</select>
		</div>
		<div class="col-sm-3 form-group">
             <textarea class="form-control" name="remarks<?php echo $i; ?>"><?php echo nl2br($mf['remarks']);?></textarea>
		</div>
	</div>
  <input type="hidden" name="id<?php echo $i; ?>" value="<?php echo $mf['id']; ?>">    
  <?php $i++;}
              } 
          }
            ?>
</div>


<!-- tab17 -->

<div class="tab-pane container" id="tab17">
    	<?php 
    	$upes=$op=$obj->display('dm_spouse_edu',"leadid=".$_GET['lead']);
        $upes1=$upes->fetch_array();
        ?>
        <label><strong>Masters</strong></label>
                  <div id="masters-div" style="padding-left: 20px">
        <?php if($upes1['con_mark_sheet_m']!="")
        { 
        ?>
    	<div class="row">
                  <a href="uploads/spousedocs/<?php echo $upes1['con_mark_sheet_m']; ?>" class="btn btn-success btn-icon-split">
                    <span class="icon text-white-50">
                      <i class="fa fa-check"></i>
                    </span>
                    <span class="text">Consolidated Mark sheet (Masters)-<?php echo $upes1['con_mark_sheet_m']; ?></span>
                  </a>
                  <div class="col-sm-3 form-group">
                  <select class="form-control" name="con_mark_sheet_m_a_s">
		<option value="">Select</option>
		<option value="1" <?php if($upes1['con_mark_sheet_m_a']=="1"){echo "selected";} ?>>Approved</option>
		<option value="0" <?php if($upes1['con_mark_sheet_m_a']=="0"){echo "selected";} ?>>Rejected</option>
	</select>
                 </div><div class="col-sm-3 form-group">
                  <textarea class="form-control" name="con_mark_sheet_m_remarks_s"><?php echo nl2br($upes1['con_mark_sheet_m_remarks']);?></textarea> 
                 </div></div>
                 <?php } ?>
                 <?php if($upes1['ind_mark_sheet_m']!="")
        { 
        ?>
                 <div class="row">
                  <a href="uploads/spousedocs/<?php echo $upes1['ind_mark_sheet_m']; ?>" class="btn btn-success btn-icon-split">
                    <span class="icon text-white-50">
                      <i class="fa fa-check"></i>
                    </span>
                    <span class="text">Individual Mark Sheet (Masters)-<?php echo $upes1['ind_mark_sheet_m']; ?></span>
                  </a>
                  <div class="col-sm-3 form-group">
                  <select class="form-control" name="ind_mark_sheet_m_a_s">
		<option value="">Select</option>
		<option value="1" <?php if($upes1['ind_mark_sheet_m_a']=="1"){echo "selected";} ?>>Approved</option>
		<option value="0" <?php if($upes1['ind_mark_sheet_m_a']=="0"){echo "selected";} ?>>Rejected</option>
	</select>
                 </div><div class="col-sm-3 form-group">
                  <textarea class="form-control" name="ind_mark_sheet_m_remarks_s"><?php echo nl2br($upes1['ind_mark_sheet_m_remarks']);?></textarea> 
                 </div></div>

<?php } ?>
<?php if($upes1['conv_cert_m']!="")
        { 
        ?>
                 <div class="row">
                  <a href="uploads/spousedocs/<?php echo $upes1['conv_cert_m']; ?>" class="btn btn-success btn-icon-split">
                    <span class="icon text-white-50">
                      <i class="fa fa-check"></i>
                    </span>
                    <span class="text">Degree Award/Convocation Certificate-<?php echo $upes1['conv_cert_m']; ?></span>
                  </a>
                  <div class="col-sm-3 form-group">
                  <select class="form-control" name="conv_cert_m_a_s">
		<option value="">Select</option>
		<option value="1" <?php if($upes1['conv_cert_m_a']=="1"){echo "selected";} ?>>Approved</option>
		<option value="0" <?php if($upes1['conv_cert_m_a']=="0"){echo "selected";} ?>>Rejected</option>
	</select>
                 </div><div class="col-sm-3 form-group">
                  <textarea class="form-control" name="conv_cert_m_remarks_s"><?php echo nl2br($upes1['conv_cert_m_remarks']);?></textarea> 
                 </div></div>

<?php } ?>
</div>
<label><strong>Bachelors</strong></label>
                  <div id="bachelors-div" style="padding-left: 20px">

                 <?php if($upes1['con_mark_sheet_b']!="")
        { 
        ?>
                 <div class="row">
                  <a href="uploads/spousedocs/<?php echo $upes1['con_mark_sheet_b']; ?>" class="btn btn-success btn-icon-split">
                    <span class="icon text-white-50">
                      <i class="fa fa-check"></i>
                    </span>
                    <span class="text">Consolidated Mark sheet (Bachelors)-<?php echo $upes1['con_mark_sheet_b']; ?></span>
                  </a>
                  <div class="col-sm-3 form-group">
                  <select class="form-control" name="con_mark_sheet_b_a_s">
		<option value="">Select</option>
		<option value="1" <?php if($upes1['con_mark_sheet_b_a']=="1"){echo "selected";} ?>>Approved</option>
		<option value="0" <?php if($upes1['con_mark_sheet_b_a']=="0"){echo "selected";} ?>>Rejected</option>
	</select>
                 </div><div class="col-sm-3 form-group">
                  <textarea class="form-control" name="con_mark_sheet_b_remarks_s"><?php echo nl2br($upes1['con_mark_sheet_b_remarks']);?></textarea> 
                 </div></div>

<?php } ?>

<?php if($upes1['ind_mark_sheet_b']!="")
        { 
        ?>
                 <div class="row">
                  <a href="uploads/spousedocs/<?php echo $upes1['ind_mark_sheet_b']; ?>" class="btn btn-success btn-icon-split">
                    <span class="icon text-white-50">
                      <i class="fa fa-check"></i>
                    </span>
                    <span class="text">Individual Mark Sheet (Bachelors)-<?php echo $upes1['ind_mark_sheet_b']; ?></span>
                  </a>
                  <div class="col-sm-3 form-group">
                  <select class="form-control" name="ind_mark_sheet_b_a_s">
		<option value="">Select</option>
		<option value="1" <?php if($upes1['ind_mark_sheet_b_a']=="1"){echo "selected";} ?>>Approved</option>
		<option value="0" <?php if($upes1['ind_mark_sheet_b_a']=="0"){echo "selected";} ?>>Rejected</option>
	</select>
                 </div><div class="col-sm-3 form-group">
                  <textarea class="form-control" name="ind_mark_sheet_b_remarks_s"><?php echo nl2br($upes1['ind_mark_sheet_b_remarks']);?></textarea> 
                 </div></div>

<?php } ?>

<?php if($upes1['conv_cert_b']!="")
        { 
        ?>
                 <div class="row">
                  <a href="uploads/spousedocs/<?php echo $upes1['conv_cert_b']; ?>" class="btn btn-success btn-icon-split">
                    <span class="icon text-white-50">
                      <i class="fa fa-check"></i>
                    </span>
                    <span class="text">Convocation Certificate-<?php echo $upes1['conv_cert_b']; ?></span>
                  </a>
                  <div class="col-sm-3 form-group">
                  <select class="form-control" name="conv_cert_b_a_s">
		<option value="">Select</option>
		<option value="1" <?php if($upes1['conv_cert_b_a']=="1"){echo "selected";} ?>>Approved</option>
		<option value="0" <?php if($upes1['conv_cert_b_a']=="0"){echo "selected";} ?>>Rejected</option>
	</select>
                 </div><div class="col-sm-3 form-group">
                  <textarea class="form-control" name="conv_cert_b_remarks_s"><?php echo nl2br($upes1['conv_cert_b_remarks']);?></textarea> 
                 </div></div>

<?php } ?>
</div>
<label><strong>Others</strong></label>
                  <div id="others-div" style="padding-left: 20px">
<?php if($upes1['eca_m']!="")
        { 
        ?>
                 <div class="row">
                  <a href="uploads/spousedocs/<?php echo $upes1['eca_m']; ?>" class="btn btn-success btn-icon-split">
                    <span class="icon text-white-50">
                      <i class="fa fa-check"></i>
                    </span>
                    <span class="text">ECA Report(Masters)-<?php echo $upes1['eca_m']; ?></span>
                  </a>
                  <div class="col-sm-3 form-group">
                  <select class="form-control" name="eca_m_a_s">
		<option value="">Select</option>
		<option value="1" <?php if($upes1['eca_m_a']=="1"){echo "selected";} ?>>Approved</option>
		<option value="0" <?php if($upes1['eca_m_a']=="0"){echo "selected";} ?>>Rejected</option>
	</select>
                 </div><div class="col-sm-3 form-group">
                  <textarea class="form-control" name="eca_m_remarks_s"><?php echo nl2br($upes1['eca_m_remarks']);?></textarea> 
                 </div></div>

<?php } ?>


<?php if($upes1['revised_eca_m']!="")
        { 
        ?>
                 <div class="row">
                  <a href="uploads/spousedocs/<?php echo $upes1['revised_eca_m']; ?>" class="btn btn-success btn-icon-split">
                    <span class="icon text-white-50">
                      <i class="fa fa-check"></i>
                    </span>
                    <span class="text">Revised ECA Report(Masters)-<?php echo $upes1['revised_eca_m']; ?></span>
                  </a>
                  <div class="col-sm-3 form-group">
                  <select class="form-control" name="revised_eca_m_a_s">
		<option value="">Select</option>
		<option value="1" <?php if($upes1['revised_eca_m_a']=="1"){echo "selected";} ?>>Approved</option>
		<option value="0" <?php if($upes1['revised_eca_m_a']=="0"){echo "selected";} ?>>Rejected</option>
	</select>
                 </div><div class="col-sm-3 form-group">
                  <textarea class="form-control" name="revised_eca_m_remarks_s"><?php echo nl2br($upes1['revised_eca_m_remarks']);?></textarea> 
                 </div></div>

<?php } ?>

<?php if($upes1['revised_wes_eca_m']!="")
        { 
        ?>
                 <div class="row">
                  <a href="uploads/spousedocs/<?php echo $upes1['revised_wes_eca_m']; ?>" class="btn btn-success btn-icon-split">
                    <span class="icon text-white-50">
                      <i class="fa fa-check"></i>
                    </span>
                    <span class="text">Revised WES ECA Report(Masters)-<?php echo $upes1['revised_wes_eca_m']; ?></span>
                  </a>
                  <div class="col-sm-3 form-group">
                  <select class="form-control" name="revised_wes_eca_m_a_s">
		<option value="">Select</option>
		<option value="1" <?php if($upes1['revised_wes_eca_m_a']=="1"){echo "selected";} ?>>Approved</option>
		<option value="0" <?php if($upes1['revised_wes_eca_m_a']=="0"){echo "selected";} ?>>Rejected</option>
	</select>
                 </div><div class="col-sm-3 form-group">
                  <textarea class="form-control" name="revised_wes_eca_m_remarks_s"><?php echo nl2br($upes1['revised_wes_eca_m_remarks']);?></textarea> 
                 </div></div>

<?php } ?>

<?php if($upes1['eca_b']!="")
        { 
        ?>
                 <div class="row">
                  <a href="uploads/spousedocs/<?php echo $upes1['eca_b']; ?>" class="btn btn-success btn-icon-split">
                    <span class="icon text-white-50">
                      <i class="fa fa-check"></i>
                    </span>
                    <span class="text">ECA Report (Bachelors)-<?php echo $upes1['eca_b']; ?></span>
                  </a>
                  <div class="col-sm-3 form-group">
                  <select class="form-control" name="eca_b_a_s">
		<option value="">Select</option>
		<option value="1" <?php if($upes1['eca_b_a']=="1"){echo "selected";} ?>>Approved</option>
		<option value="0" <?php if($upes1['eca_b_a']=="0"){echo "selected";} ?>>Rejected</option>
	</select>
                 </div><div class="col-sm-3 form-group">
                  <textarea class="form-control" name="eca_b_remarks_s"><?php echo nl2br($upes1['eca_b_remarks']);?></textarea> 
                 </div></div>

<?php } ?>

<?php if($upes1['revised_eca_b']!="")
        { 
        ?>
                 <div class="row">
                  <a href="uploads/spousedocs/<?php echo $upes1['revised_eca_b']; ?>" class="btn btn-success btn-icon-split">
                    <span class="icon text-white-50">
                      <i class="fa fa-check"></i>
                    </span>
                    <span class="text">Revised ECA Report(Bachelors)-<?php echo $upes1['revised_eca_b']; ?></span>
                  </a>
                  <div class="col-sm-3 form-group">
                  <select class="form-control" name="revised_eca_b_a_s">
		<option value="">Select</option>
		<option value="1" <?php if($upes1['revised_eca_b_a']=="1"){echo "selected";} ?>>Approved</option>
		<option value="0" <?php if($upes1['revised_eca_b_a']=="0"){echo "selected";} ?>>Rejected</option>
	</select>
                 </div><div class="col-sm-3 form-group">
                  <textarea class="form-control" name="revised_eca_b_remarks_s"><?php echo nl2br($upes1['revised_eca_b_remarks']);?></textarea> 
                 </div></div>

<?php } ?>




<?php if($upe1['revised_wes_eca_b']!="")
        { 
        ?>
                 <div class="row">
                  <a href="uploads/spousedocs/<?php echo $upes1['revised_wes_eca_b']; ?>" class="btn btn-success btn-icon-split">
                    <span class="icon text-white-50">
                      <i class="fa fa-check"></i>
                    </span>
                    <span class="text">Revised WES ECA Report(Bachelors)-<?php echo $upes1['revised_wes_eca_b']; ?></span>
                  </a>
                  <div class="col-sm-3 form-group">
                  <select class="form-control" name="revised_wes_eca_b_a_s">
		<option value="">Select</option>
		<option value="1" <?php if($upes1['revised_wes_eca_b_a']=="1"){echo "selected";} ?>>Approved</option>
		<option value="0" <?php if($upes1['revised_wes_eca_b_a']=="0"){echo "selected";} ?>>Rejected</option>
	</select>
                 </div><div class="col-sm-3 form-group">
                  <textarea class="form-control" name="revised_wes_eca_b_remarks_s"><?php echo nl2br($upes1['revised_wes_eca_b_remarks']);?></textarea> 
                 </div></div>

<?php } ?>



<?php if($upes1['intermediate']!="")
        { 
        ?>
                 <div class="row">
                  <a href="uploads/spousedocs/<?php echo $upes1['intermediate']; ?>" class="btn btn-success btn-icon-split">
                    <span class="icon text-white-50">
                      <i class="fa fa-check"></i>
                    </span>
                    <span class="text">Intermediate-<?php echo $upes1['intermediate']; ?></span>
                  </a>
                  <div class="col-sm-3 form-group">
                  <select class="form-control" name="intermediate_a_s">
		<option value="">Select</option>
		<option value="1" <?php if($upes1['intermediate_a']=="1"){echo "selected";} ?>>Approved</option>
		<option value="0" <?php if($upes1['intermediate_a']=="0"){echo "selected";} ?>>Rejected</option>
	</select>
                 </div><div class="col-sm-3 form-group">
                  <textarea class="form-control" name="intermediate_remarks_s"><?php echo nl2br($upes1['intermediate_remarks']);?></textarea> 
                 </div></div>

<?php } ?>

<?php if($upes1['ssc']!="")
        { 
        ?>
                 <div class="row">
                  <a href="uploads/spousedocs/<?php echo $upes1['ssc']; ?>" class="btn btn-success btn-icon-split">
                    <span class="icon text-white-50">
                      <i class="fa fa-check"></i>
                    </span>
                    <span class="text">SSC-<?php echo $upes1['ssc']; ?></span>
                  </a>
                  <div class="col-sm-3 form-group">
                  <select class="form-control" name="ssc_a_s">
		<option value="">Select</option>
		<option value="1" <?php if($upes1['ssc_a']=="1"){echo "selected";} ?>>Approved</option>
		<option value="0" <?php if($upes1['ssc_a']=="0"){echo "selected";} ?>>Rejected</option>
	</select>
                 </div><div class="col-sm-3 form-group">
                  <textarea class="form-control" name="ssc_remarks_s"><?php echo nl2br($upes1['ssc_remarks']);?></textarea> 
                 </div></div>

<?php } ?>

<?php if($upes1['bach_seal_trans_unv']!="")
        { 
        ?>
                 <div class="row">
                  <a href="uploads/spousedocs/<?php echo $upes1['bach_seal_trans_unv']; ?>" class="btn btn-success btn-icon-split">
                    <span class="icon text-white-50">
                      <i class="fa fa-check"></i>
                    </span>
                    <span class="text">Sealed Transcript From University (Bachelors)-<?php echo $upes1['bach_seal_trans_unv']; ?></span>
                  </a>
                  <div class="col-sm-3 form-group">
                  <select class="form-control" name="bach_seal_trans_unv_a_s">
		<option value="">Select</option>
		<option value="1" <?php if($upes1['bach_seal_trans_unv_a']=="1"){echo "selected";} ?>>Approved</option>
		<option value="0" <?php if($upes1['bach_seal_trans_unv_a']=="0"){echo "selected";} ?>>Rejected</option>
	</select>
                 </div><div class="col-sm-3 form-group">
                  <textarea class="form-control" name="bach_seal_trans_unv_remarks_s"><?php echo nl2br($upes1['bach_seal_trans_unv_remarks']);?></textarea> 
                 </div></div>

<?php } ?>
</div><label><strong>Miscellaneous</strong></label>
                  <div id="misc-div" style="padding-left: 20px">
<?php 
if (count($misc_files) > 0 ) {

                      foreach ($misc_files as $mf) {
                      	if($mf['category']=='se'){?>
                      	<div class="row">
			                  <a href="uploads/spousedocs/<?php echo $mf['file_name']; ?>" class="btn btn-success btn-icon-split">
			                    <span class="icon text-white-50">
			                      <i class="fa fa-check"></i>
			                    </span>
			                    <span class="text"><?php echo $mf['file_name']; ?></span>
			                  </a>
				            <div class="col-sm-3 form-group">
				                <select class="form-control" name="approval<?php echo $i; ?>">
									<option value="">Select</option>
									<option value="1" <?php if($mf['approval']=="1"){echo "selected";} ?>>Approved</option>
									<option value="0" <?php if($mf['approval']=="0"){echo "selected";} ?>>Rejected</option>
								</select>
							</div>
							<div class="col-sm-3 form-group">
					             <textarea class="form-control" name="remarks<?php echo $i; ?>"><?php echo nl2br($mf['remarks']);?></textarea>
							</div>
						</div>
			          <input type="hidden" name="id<?php echo $i; ?>" value="<?php echo $mf['id']; ?>">    
                <?php $i++;}
              } 
          }
            ?>
</div>
</div>

<div class="tab-pane container" id="tab19">
	<?php 
		$cp1=$obj->display3("Select * from dm_client_professional where leadid=".$_GET['lead']." order by `date`");
 		 if ($cp1->num_rows > 0) {?>
 		 	<input type="hidden" name="exp_countc" value="<?php echo $cp1->num_rows; ?>"> 
 		 	<?php
                  // var_dump($mf);
                    $i=1;
                     $j=1;
                      while($cp = $cp1->fetch_assoc()) {
                      	$cpm1=$obj->display3("select * from mis_client_files where leadid=".$_GET['lead']  ." and category='cpr' and pr_id=". $cp['id']);
                        if($cp['offer_letter']!="" || $cp['releaving_letter']!="" || $cp['reference_letter']!="" || $cp['pay_slips']!="" || $cpm1->num_rows > 0){?>
                      	
                      	<div class="exp">
                      	<label><strong><?php echo $cp['company_name']; ?></strong></label>
                      	<?php if($cp['offer_letter']!=""){?>
                      	 <div class="row">
                  <a href="uploads/clientdocs/<?php echo $cp['offer_letter']; ?>" class="btn btn-success btn-icon-split">
                    <span class="icon text-white-50">
                      <i class="fa fa-check"></i>
                    </span>
                    <span class="text">Offer Letter</span>
                  </a>
                  <div class="col-sm-3 form-group">
                  <select class="form-control" name="offer_letterc<?php echo $i; ?>">
						<option value="">Select</option>
						<option value="1" <?php if($cp['offer_letter_a']=="1"){echo "selected";} ?>>Approved</option>
						<option value="0" <?php if($cp['offer_letter_a']=="0"){echo "selected";} ?>>Rejected</option>
					</select>
					<input type="hidden" name="exp-idc<?php echo $i; ?>" value="<?php echo $cp['id']; ?>"> 
                 </div>
                 <div class="col-sm-3 form-group">
                  <textarea class="form-control" name="offer_letter_remarksc<?php echo $i; ?>"><?php echo nl2br($cp['offer_letter_remarks']);?></textarea> 
                 </div>
             </div>
         <?php } if($cp['releaving_letter']!=""){?>
             	 <div class="row">
                  <a href="uploads/clientdocs/<?php echo $cp['releaving_letter']; ?>" class="btn btn-success btn-icon-split">
                    <span class="icon text-white-50">
                      <i class="fa fa-check"></i>
                    </span>
                    <span class="text">Releaving Letter</span>
                  </a>
                  <div class="col-sm-3 form-group">
                  <select class="form-control" name="releaving_letterc<?php echo $i; ?>">
						<option value="">Select</option>
						<option value="1" <?php if($cp['releaving_letter_a']=="1"){echo "selected";} ?>>Approved</option>
						<option value="0" <?php if($cp['releaving_letter_a']=="0"){echo "selected";} ?>>Rejected</option>
					</select>
					<input type="hidden" name="exp-idc<?php echo $i; ?>" value="<?php echo $cp['id']; ?>"> 
                 </div>
                 <div class="col-sm-3 form-group">
                  <textarea class="form-control" name="releaving_letter_remarksc<?php echo $i; ?>"><?php echo nl2br($cp['releaving_letter_remarks']);?></textarea> 
                 </div>
             </div>
              <?php } if($cp['reference_letter']!=""){?>
             	 <div class="row">
                  <a href="uploads/clientdocs/<?php echo $cp['reference_letter']; ?>" class="btn btn-success btn-icon-split">
                    <span class="icon text-white-50">
                      <i class="fa fa-check"></i>
                    </span>
                    <span class="text">Reference Letter</span>
                  </a>
                  <div class="col-sm-3 form-group">
                  <select class="form-control" name="reference_letterc<?php echo $i; ?>">
						<option value="">Select</option>
						<option value="1" <?php if($cp['reference_letter_a']=="1"){echo "selected";} ?>>Approved</option>
						<option value="0" <?php if($cp['reference_letter_a']=="0"){echo "selected";} ?>>Rejected</option>
					</select>
					<input type="hidden" name="exp-idc<?php echo $i; ?>" value="<?php echo $cp['id']; ?>"> 
                 </div>
                 <div class="col-sm-3 form-group">
                  <textarea class="form-control" name="reference_letter_remarksc<?php echo $i; ?>"><?php echo nl2br($cp['reference_letter_remarks']);?></textarea> 
                 </div>
             </div>
              <?php } if($cp['pay_slips']!=""){?>
             	 <div class="row">
                  <a href="uploads/clientdocs/<?php echo $cp['pay_slips']; ?>" class="btn btn-success btn-icon-split">
                    <span class="icon text-white-50">
                      <i class="fa fa-check"></i>
                    </span>
                    <span class="text">Pay Slip</span>
                  </a>
                  <div class="col-sm-3 form-group">
                  <select class="form-control" name="pay_slipsc<?php echo $i; ?>">
						<option value="">Select</option>
						<option value="1" <?php if($cp['pay_slips_a']=="1"){echo "selected";} ?>>Approved</option>
						<option value="0" <?php if($cp['pay_slips_a']=="0"){echo "selected";} ?>>Rejected</option>
					</select>
					<input type="hidden" name="exp-idc<?php echo $i; ?>" value="<?php echo $cp['id']; ?>"> 
                 </div>
                 <div class="col-sm-3 form-group">
                  <textarea class="form-control" name="pay_slips_remarksc<?php echo $i; ?>"><?php echo nl2br($cp['pay_slips_remarks']);?></textarea> 
                 </div>
             </div>
         <?php }?>
                        <?php 
                        if ($cpm1->num_rows > 0) {
                  // var_dump($mf);
                           
                             while($cpm = $cpm1->fetch_assoc()) {?>
                             	<div class="row">
                  <a href="uploads/clientdocs/<?php echo $cpm['file_name']; ?>" class="btn btn-success btn-icon-split">
                    <span class="icon text-white-50">
                      <i class="fa fa-check"></i>
                    </span>
                    <span class="text"><?php echo $cpm['file_name']; ?></span>
                  </a>
                  <div class="col-sm-3 form-group">
                  <select class="form-control" name="exp_misc_ac<?php echo $j; ?>">
						<option value="">Select</option>
						<option value="1" <?php if($cpm['approval']=="1"){echo "selected";} ?>>Approved</option>
						<option value="0" <?php if($cpm['approval']=="0"){echo "selected";} ?>>Rejected</option>
					</select>
					<input type="hidden" name="exp-misc-idc<?php echo $j; ?>" value="<?php echo $cpm['id']; ?>"> 
                 </div>
                 <div class="col-sm-3 form-group">
                  <textarea class="form-control" name="misc_remarksc<?php echo $j; ?>"><?php echo nl2br($cpm['remarks']);?></textarea> 
                 </div>
             </div>
                              <?php
                          $j++;
                        }
                      }?>
         </div>
                      	<?php $i++;}
                      }
                  }?>
                      <input type="hidden" name="exp-misc-c-count" value="<?php echo $j-1;?>">
</div>


<div class="tab-pane container" id="tab18">
	<?php 
		$cp1=$obj->display3("Select * from dm_spouse_professional where leadid=".$_GET['lead']." order by `date`");
 		 if ($cp1->num_rows > 0) {?>
 		 	<input type="hidden" name="exp_counts" value="<?php echo $cp1->num_rows; ?>"> 
 		 	<?php
                  // var_dump($mf);
                    $i=1;
                     $j=1;
                      while($cp = $cp1->fetch_assoc()) {
                      	$cpm1=$obj->display3("select * from mis_client_files where leadid=".$_GET['lead']  ." and category='spr' and pr_id=". $cp['id']);
                        if($cp['offer_letter']!="" || $cp['releaving_letter']!="" || $cp['reference_letter']!="" || $cp['pay_slips']!="" || $cpm1->num_rows > 0){?>
                      	
                      	<div class="exp">
                      	<label><strong><?php echo $cp['company_name']; ?></strong></label>
                      	<?php if($cp['offer_letter']!=""){?>
                      	 <div class="row">
                  <a href="uploads/spousedocs/<?php echo $cp['offer_letter']; ?>" class="btn btn-success btn-icon-split">
                    <span class="icon text-white-50">
                      <i class="fa fa-check"></i>
                    </span>
                    <span class="text">Offer Letter</span>
                  </a>
                  <div class="col-sm-3 form-group">
                  <select class="form-control" name="offer_letters<?php echo $i; ?>">
						<option value="">Select</option>
						<option value="1" <?php if($cp['offer_letter_a']=="1"){echo "selected";} ?>>Approved</option>
						<option value="0" <?php if($cp['offer_letter_a']=="0"){echo "selected";} ?>>Rejected</option>
					</select>
					<input type="hidden" name="exp-ids<?php echo $i; ?>" value="<?php echo $cp['id']; ?>"> 
                 </div>
                 <div class="col-sm-3 form-group">
                  <textarea class="form-control" name="offer_letter_remarkss<?php echo $i; ?>"><?php echo nl2br($cp['offer_letter_remarks']);?></textarea> 
                 </div>
             </div>
         <?php } if($cp['releaving_letter']!=""){?>
             	 <div class="row">
                  <a href="uploads/spousedocs/<?php echo $cp['releaving_letter']; ?>" class="btn btn-success btn-icon-split">
                    <span class="icon text-white-50">
                      <i class="fa fa-check"></i>
                    </span>
                    <span class="text">Releaving Letter</span>
                  </a>
                  <div class="col-sm-3 form-group">
                  <select class="form-control" name="releaving_letters<?php echo $i; ?>">
						<option value="">Select</option>
						<option value="1" <?php if($cp['releaving_letter_a']=="1"){echo "selected";} ?>>Approved</option>
						<option value="0" <?php if($cp['releaving_letter_a']=="0"){echo "selected";} ?>>Rejected</option>
					</select>
					<input type="hidden" name="exp-ids<?php echo $i; ?>" value="<?php echo $cp['id']; ?>"> 
                 </div>
                 <div class="col-sm-3 form-group">
                  <textarea class="form-control" name="releaving_letter_remarkss<?php echo $i; ?>"><?php echo nl2br($cp['releaving_letter_remarks']);?></textarea> 
                 </div>
             </div>
              <?php } if($cp['reference_letter']!=""){?>
             	 <div class="row">
                  <a href="uploads/spousedocs/<?php echo $cp['reference_letter']; ?>" class="btn btn-success btn-icon-split">
                    <span class="icon text-white-50">
                      <i class="fa fa-check"></i>
                    </span>
                    <span class="text">Reference Letter</span>
                  </a>
                  <div class="col-sm-3 form-group">
                  <select class="form-control" name="reference_letters<?php echo $i; ?>">
						<option value="">Select</option>
						<option value="1" <?php if($cp['reference_letter_a']=="1"){echo "selected";} ?>>Approved</option>
						<option value="0" <?php if($cp['reference_letter_a']=="0"){echo "selected";} ?>>Rejected</option>
					</select>
					<input type="hidden" name="exp-ids<?php echo $i; ?>" value="<?php echo $cp['id']; ?>"> 
                 </div>
                 <div class="col-sm-3 form-group">
                  <textarea class="form-control" name="reference_letter_remarkss<?php echo $i; ?>"><?php echo nl2br($cp['reference_letter_remarks']);?></textarea> 
                 </div>
             </div>
              <?php } if($cp['pay_slips']!=""){?>
             	 <div class="row">
                  <a href="uploads/spousedocs/<?php echo $cp['pay_slips']; ?>" class="btn btn-success btn-icon-split">
                    <span class="icon text-white-50">
                      <i class="fa fa-check"></i>
                    </span>
                    <span class="text">Pay Slip</span>
                  </a>
                  <div class="col-sm-3 form-group">
                  <select class="form-control" name="pay_slipss<?php echo $i; ?>">
						<option value="">Select</option>
						<option value="1" <?php if($cp['pay_slips_a']=="1"){echo "selected";} ?>>Approved</option>
						<option value="0" <?php if($cp['pay_slips_a']=="0"){echo "selected";} ?>>Rejected</option>
					</select>
					<input type="hidden" name="exp-ids<?php echo $i; ?>" value="<?php echo $cp['id']; ?>"> 
                 </div>
                 <div class="col-sm-3 form-group">
                  <textarea class="form-control" name="pay_slips_remarkss<?php echo $i; ?>"><?php echo nl2br($cp['pay_slips_remarks']);?></textarea> 
                 </div>
             </div>
         <?php }?>
                        <?php 
                        if ($cpm1->num_rows > 0) {
                  // var_dump($mf);
                           
                             while($cpm = $cpm1->fetch_assoc()) {?>
                             	<div class="row">
                  <a href="uploads/spousedocs/<?php echo $cpm['file_name']; ?>" class="btn btn-success btn-icon-split">
                    <span class="icon text-white-50">
                      <i class="fa fa-check"></i>
                    </span>
                    <span class="text"><?php echo $cpm['file_name']; ?></span>
                  </a>
                  <div class="col-sm-3 form-group">
                  <select class="form-control" name="exp_misc_as<?php echo $j; ?>">
						<option value="">Select</option>
						<option value="1" <?php if($cpm['approval']=="1"){echo "selected";} ?>>Approved</option>
						<option value="0" <?php if($cpm['approval']=="0"){echo "selected";} ?>>Rejected</option>
					</select>
					<input type="hidden" name="exp-misc-ids<?php echo $j; ?>" value="<?php echo $cpm['id']; ?>"> 
                 </div>
                 <div class="col-sm-3 form-group">
                  <textarea class="form-control" name="misc_remarkss<?php echo $j; ?>"><?php echo nl2br($cpm['remarks']);?></textarea> 
                 </div>
             </div>
                              <?php
                          $j++;
                        }
                      }?>
         </div>
                      	<?php $i++;}
                      }
                  }?>
                      <input type="hidden" name="exp-misc-s-count" value="<?php echo $j-1;?>">
</div>


<!--TAB14--> 
<div class="tab-pane container" id="tab14">

	<textarea type="text" class="form-control" name="status_c" rows="5" cols="50" id="status_c"></textarea>
	<br>
	<input type="file" name="status_f" accept="image/*">
<input type="hidden" name="remove_status" id="remove_status" value="">
	<?php $st = $obj->display('client_status','leadid='.$_GET['lead'].' order by id desc');
	if($st->num_rows>0){
          while($st1 = $st->fetch_array())
          {
            print_r($str1) ?>
          <div class="row">

            <!-- Area Chart -->
            <div class="col-xl-12 col-lg-12">
              <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Status Updates<h6 align="left" class="text-primary">last updated (<?php echo $st1['date'] ; ?>) 
                  	<?php if($_SESSION["TYPE"]!="SA"){ ?><i class="fa fa-trash" style="color: red" onclick="$(this).closest('.row').remove();$('#remove_status').val($('#remove_status').val()+'|||<?php echo $st1['id'] ; ?>')"></i><?php } ?></h6></h6>
                 
                </div>
                <!-- Card Body -->
                <div class="card-body">
                  <div class="chart-area">
                    <!-- <canvas id="myAreaChart"></canvas> -->
                    <h6 class="text-primary">Message</h6>
                    <label><?php echo nl2br($st1['status']); ?>
                    <br><br>
                    <img class="chart-area" style="max-width: 100%" src="<?php echo "uploads/status/".$st1['file']; ?>">
                  </div>
                </div>
              </div>
            </div>
          </div>
         <?php }} ?>

	</div>

<!-- tab 18 -->

<div class="tab-pane container" id="tab20">
	<div class="modal-body">

	</div>
</div>
<!-- end -->


</div>
<?php 
if($_SESSION['ROLE']!=4 && $_SESSION['ROLE']!=10) {
?>	
<div class="row">	
	<div class="col-sm-12 form-group">
		<input type="submit" name="submit" value="SUBMIT" class="btn btn-info"> 	
	</div>			
</div>
<?php } ?>
				</form>
			</div>
		
<?php 	include_once("footer.php");	?>
   	<script>
		$(function(){
		$('#retnDate').datepicker({    format: 'dd-mm-yyyy',	autoclose: true}); 
		$('#ecaApplyDate').datepicker({    format: 'dd-mm-yyyy',	autoclose: true}); 
		$('#compDate').datepicker({    format: 'dd-mm-yyyy',	autoclose: true}); 
		$('#ecaReceDate').datepicker({    format: 'dd-mm-yyyy',	autoclose: true}); 
		$('#specaApplyDate').datepicker({    format: 'dd-mm-yyyy',	autoclose: true}); 
		$('#spcompDate').datepicker({    format: 'dd-mm-yyyy',	autoclose: true}); 
		$('#specaReceDate').datepicker({    format: 'dd-mm-yyyy',	autoclose: true}); 
		$('#compDate').datepicker({    format: 'dd-mm-yyyy',	autoclose: true}); 
		$('#landDate').datepicker({    format: 'dd-mm-yyyy',	autoclose: true}); 
		$('#visaReqDate').datepicker({    format: 'dd-mm-yyyy',	autoclose: true}); 
		$('#passSentDate').datepicker({    format: 'dd-mm-yyyy',	autoclose: true}); 
		$('#passReceDate').datepicker({    format: 'dd-mm-yyyy',	autoclose: true}); 
		$('#itaReceDate').datepicker({    format: 'dd-mm-yyyy',	autoclose: true}); 
		$('#itaSubLastDate').datepicker({    format: 'dd-mm-yyyy',	autoclose: true}); 
		$('#itaDocReceDate').datepicker({    format: 'dd-mm-yyyy',	autoclose: true}); 
		$('#itaSubDate').datepicker({    format: 'dd-mm-yyyy',	autoclose: true}); 
		$('#itaAddiReqDate').datepicker({    format: 'dd-mm-yyyy',	autoclose: true}); 
		$("#pnpSubDate").datepicker({    format: 'dd-mm-yyyy',	autoclose: true}); 
		$('#pnpExpDate').datepicker({    format: 'dd-mm-yyyy',	autoclose: true}); 
		$('#expiryDate').datepicker({    format: 'dd-mm-yyyy',	autoclose: true});
		$('#expiryDateS').datepicker({    format: 'dd-mm-yyyy',	autoclose: true});
		$('#testDateS').datepicker({    format: 'dd-mm-yyyy',	autoclose: true});
		$('#testDate').datepicker({    format: 'dd-mm-yyyy',	autoclose: true}); 
		$('#eeDocReceDate').datepicker({    format: 'dd-mm-yyyy',	autoclose: true}); 
		$('#eeProfLauDate').datepicker({    format: 'dd-mm-yyyy',	autoclose: true}); 
		$('#eeProfExpDate').datepicker({    format: 'dd-mm-yyyy',	autoclose: true}); 
		}); 
		// var x=2;
		// function add_a_row(){
		// 	var row=$('<div class=row id="append_a'+x+'"><div class="col-sm-3 form-group"><label >PNP launched</label><select class="form-control" name="pnpLaun"><option value="">Select</option><option value="PEI" <?php if($pnp1['pnpLaun']=="PEI") { echo 'selected="selected"';}?>>PEI</option><option value="Nova Soctia" <?php if($pnp1['pnpLaun']=="Nova Soctia") { echo 'selected="selected"';}?>>Nova Soctia</option><option value="New Brwunscwick" <?php if($pnp1['pnpLaun']=="New Brwunscwick") { echo 'selected="selected"';}?>>New Brwunscwick</option><option value="Saskatchewan" <?php if($pnp1['pnpLaun']=="Saskatchewan") { echo 'selected="selected"';}?>>Saskatchewan</option><option value="Quebec" <?php if($pnp1['pnpLaun']=="Quebec") { echo 'selected="selected"';}?>>Quebec</option><option value="Modern" <?php if($pnp1['pnpLaun']=="Modern") { echo 'selected="selected"';}?>>Modern</option><option value="Manitoba" <?php if($pnp1['pnpLaun']=="Manitoba") { echo 'selected="selected"';}?>>Manitoba</option><option value="Ontario" <?php if($pnp1['pnpLaun']=="Ontario") { echo 'selected="selected"';}?>>Ontario</option><option value="British Columbia" <?php if($pnp1['pnpLaun']=="British Columbia") { echo 'selected="selected"';}?>>British Columbia</option><option value="Alberta" <?php if($pnp1['pnpLaun']=="Alberta") { echo 'selected="selected"';}?>>Alberta</option><option value="Yukon" <?php if($pnp1['pnpLaun']=="Yukon") { echo 'selected="selected"';}?>>Yukon</option><option value="Newfoundland & Labrador" <?php if($pnp1['pnpLaun']=="Newfoundland & Labrador") { echo 'selected="selected"';}?>>Newfoundland & Labrador </option></select></div><div class="col-sm-3 form-group"><label >Submission Date</label><input type="text" class="form-control" id="pnpSubDate'+x+'" name="pnpSubDate" value="<?php echo $pnp1['pnpSubDate'];?>" ></div><div class="col-sm-3 form-group"><label >Expiry Date</label><input type="text" class="form-control" id="pnpExpDate'+x+'" name="pnpExpDate" value="<?php echo $pnp1['pnpExpDate'];?>" ></div><div class="col-sm-3 form-group"><label >STATUS</label><select class="form-control" name="pnpStatus" id="pnpStatus"><option value="">Select</option><option value="IN PROGRESS" <?php if($pnp1['pnpStatus']=="IN PROGRESS") { echo 'selected="selected"';}?>>IN PROGRESS</option><option value="APPROVED" <?php if($pnp1['pnpStatus']=="APPROVED") { echo 'selected="selected"';}?>>APPROVED</option><option value="Rejected" <?php if($pnp1['pnpStatus']=="Rejected") { echo 'selected="selected"';}?>>Rejected</option></select><button type="button" onclick="remove_a_row('+ x +')" class="">Remove</button></div></div>');
		// 	$('#pnpSubDate'+x).datepicker({    format: 'dd-mm-yyyy',	autoclose: true}); 
		//     $('#pnpExpDate'+x).datepicker({    format: 'dd-mm-yyyy',	autoclose: true});

		// 	row.appendTo("#pnpbody");

		// 	x++;

		// }

		// function remove_a_row(a){
		// 	$('#append_a'+a).remove();
		// }
		$(document).ready(function(){

	 $(document).on('blur','.update',function(){
 	var id=$(this).data("id");
 	var column_name=$(this).data("column");
 	var value =$(this).val();
 	$.ajax({
 		url:'update.php',
 		method:'POST',
 		data:{id:id,column_name:column_name,value:value},
 		sucess:function(data)
 		{
 			$('#alert_message').html('<div class=alert alert-success">'+data+'</div>')
 		}
 	})
 });
 });
		$("#tab13, #tab15, #tab19, #tab16, #tab17, #tab18").find("select").each(function () {
			if($(this).val()=="1"){
				$(this).closest(".row").find("textarea").val("");
				$(this).closest(".row").find("textarea").css("display","none");
			}else{
				$(this).closest(".row").find("textarea").css("display","");
			}
		})
		
	$("#tab13, #tab15, #tab19, #tab16, #tab17, #tab18").find(".btn-icon-split").each(function () {
			if($(this).closest(".row").find("select").val()=="0"){
				$(this).removeClass("btn-success").addClass("btn-danger");
			}else if($(this).closest(".row").find("select").val()=="1"){
				$(this).removeClass("btn-success").addClass("btn-success");
			}else{
				$(this).removeClass("btn-success").addClass("btn-secondary");
			}

		})
		$("#tab13, #tab15, #tab19, #tab16, #tab17, #tab18").on('change','select',function(){
			$("#any_change").val("1");
			if($(this).val()=="1"){
				$(this).closest(".row").find("textarea").val("");
				$(this).closest(".row").find("textarea").css("display","none");
				$(this).closest(".row").find(".btn-icon-split").removeClass("btn-secondary").removeClass("btn-danger").addClass("btn-success");
			}else{
				$(this).closest(".row").find("textarea").css("display","");
				if($(this).val()=="0"){
					$(this).closest(".row").find(".btn-icon-split").removeClass("btn-secondary").removeClass("btn-success").addClass("btn-danger");
				}
			}
		});
		
		$("#tab13, #tab15, #tab19, #tab16, #tab17, #tab18").on('change','textarea',function(){
			$("#any_change").val("1");
		});
		</script>
	
<script>
$('.openobs').on('click',function(){
    $("#tab20").find('.modal-body').load('user_messenger.php?lead=<?php echo $_GET['lead'];?>',function(){
        // $('#tab18').modal({show:true});
    });
});
</script>	
<!-- <script type="text/javascript" src="js/table-drop-down.js"></script> -->