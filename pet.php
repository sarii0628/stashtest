<?php 
$dog = "chocolat";
$cats = ["puu", "nii"];
$catstr = "";
foreach ($cats as $cat) {
    $catstr = $catstr.$cat;
    if($cat != end($cats)){    
        $catstr = $catstr." and ";
    }
}
echo "my pets are $dog (female) and $catstr (male)";