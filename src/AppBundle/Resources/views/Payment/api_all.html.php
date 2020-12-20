<?php 
$list=array();
foreach ($transactions as $key => $transaction) {
	if ($transaction->getPoints()!=0) {
		$a["id"]=$transaction->getId();
		$a["label"]=$transaction->getLabel();
		$a["type"]=$transaction->getType();
		$a["points"]=$transaction->getPoints().' P';
		$a["amount"]=($transaction->getPoints())/$toCurrency." ".$currency;
		$a["enabled"]=true;
		$a["created"]=$view['time']->diff($transaction->getCreated());
		if ($transaction->getInvited()!=null) {
			$a["image"]=$transaction->getInvited()->getImage();
		}
		if ($transaction->getStatus()!=null) {
			if ($transaction->getStatus()->getType()!="quote") {
				if ($transaction->getStatus()->getMedia()->getType() == "link") {
					$a["image"]= $transaction->getStatus()->getMedia()->getUrl();
				}else{
					$a["image"]= $this['imagine']->filter($view['assets']->getUrl($transaction->getStatus()->getMedia()->getLink()), 'status_thumb_api');
				}
			}else{
				$a["image"] = "none";
			}
		}
		$list[]=$a;
	}
}
echo json_encode($list, JSON_UNESCAPED_UNICODE);

?>