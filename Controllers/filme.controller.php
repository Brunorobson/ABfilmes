<?php

$filme = Filme::get($_GET['id']);


view('filme', compact('filme'));
