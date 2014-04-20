<?php
if(!defined('kernel_entry') || !kernel_entry) die('Not A Valid Entry Point');
class cls_json_prescription
{
public function write_buffer($data)
	{
	}

public function echo_export_string($data)
	{
	echo $this->create_export_string($data);
	}

private function create_export_string($data)
	{
		$i = 0;
		$content = 'data = {' . PHP_EOL;
		$content .= 'rows: [' . PHP_EOL;
		foreach ($data as $prescription)
		{
			if ($i != 0)
				{
					$content .= ',' . PHP_EOL;
				}
			$content .= '{' . PHP_EOL;
			$content .= 'id:' . "'" . $prescription->get_id() . "'" . ' , ' . PHP_EOL;
			$content .= 'data:' . "[" . "'" . $prescription->get_id_person() . "'" . "," . "'" . $prescription->get_ik() . "'" . "," . "'" . $prescription->get_insurance_name() . "'" . "," . "'" . $prescription->get_id_insurance() . "'" . "," . "'" . $prescription->get_memberno() . "'" . "," . "'" . $prescription->get_memberstate() . "'" . "," . "'" . $prescription->get_positionnumber1() . "'" . "," . "'" . $prescription->get_positionsnumber2() . "'" . "," . "'" . $prescription->get_maxunits_applied() . "'" . "," . "'" . $prescription->get_maxunitsperweek_applied() . "'" . "," . "'" . $prescription->get_maxmonths_applied() . "'" . "," . "'" . $prescription->get_maxunits_issued() . "'" . "," . "'" . $prescription->get_maxunitsperweek_issued() . "'" . "," . "'" . $prescription->get_maxmonths_issued() . "'" . "," . "'" . $prescription->get_lanr() . "'" . "," . "'" . $prescription->get_betrno() . "'" . "," . "'" . $prescription->get_validfrom() . "'" . "," . "'" . $prescription->get_validtil() . "'" . "," . "'" . $prescription->get_insurance_approval_date() . "'" . "," . "'" . $prescription->get_physician_applicatiom_date() . "'" . "," . "'" . $prescription->get_patient_signature_date() . "'" . "," . "'" . $prescription->get_startdate() . "'" . "," . "'" . $prescription->get_issuedate() . "'" . "," . "'" . $prescription->get_id_prescription_type() . "'" . "," . "'" . $prescription->get_diagnosis() . "'" . "," . "'" . $prescription->get_damage() . "'" . "," . "'" . $prescription->get_goal() . "'" . "," . "'" . $prescription->get_id_sport() . "'" . "]" . PHP_EOL;
			$content .= '}' . PHP_EOL;
			$i++;

		}
		$content .= ']' . PHP_EOL;
		$content .= ' }' . PHP_EOL;
		return $content;
	}
}
?>
