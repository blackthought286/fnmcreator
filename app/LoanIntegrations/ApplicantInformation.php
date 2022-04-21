<?php

namespace App\LoanIntegrations;

class ApplicantInformation extends LoanIntegration {

    public function format_data(): array {

        return $arr = [
            'field_id' => $this->field_id,
            'sector_section' => $this->sector_section,
            'data_stream' => $this->data_stream,
            'field_information' => $this->field_information,
        ];

    }

}
