<?php
session_start();
requireValidSession();

$today = date("d/m/Y");

loadTemplateView('dayRecordsView', ['today' => $today]);