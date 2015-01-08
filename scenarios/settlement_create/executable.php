<?php

require(__DIR__ . '/vendor/autoload.php');

Httpful\Bootstrap::init();
RESTful\Bootstrap::init();
Balanced\Bootstrap::init();

Balanced\Settings::$api_key = "ak-test-1xLFE6RLC1W3P4ePiQDI4UVpRwtKcdfqL";

$account = Balanced\Account::get("/accounts/AT2E6Ju62P9AnTJwe0fL5kOI");
$account->settlements->create(array(
    "appears_on_statement_as" => "ThingsCo",
    "description" => "Payout A",
    "funding_instrument" => "/bank_accounts/BA3uzbngfVXy1SGg25Et7iKY",
    "meta" => "Array",
));

?>