<?php

echo move_uploaded_file($_FILES['file']['tmp_name'], "G:/demo/" . $_FILES['file']['name']);

