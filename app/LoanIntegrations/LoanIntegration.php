<?php

namespace App\LoanIntegrations;

abstract class LoanIntegration {

    protected int $field_id;
    protected int $sector_section;
    protected string $data_stream;
    protected string $field_information;

    public function __construct(int $field_id, int $sector_section, string $data_stream, string $field_information) {

        $this->field_id = $field_id;
        $this->sector_section = $sector_section;
        $this->data_stream = $data_stream;
        $this->field_information = $field_information;

    }

    abstract public function format_data() : array;

}
