<?php

$bitcoinPrice;
$bitcoinWalletBalance;
$bitcoinExchangeRate;

//my attempt
function newBitcoinBalance($newBitcoinWalletBalance) {
	$bitCoinCashPrice = $bitcoinPrice;
	$newBitcoinWalletBalance = $bitCoinCashPrice ;
		$this->bitcoinWalletBalance = newBitcoinWalletBalance;
}


//Example
/**
 * input: (float) price in bitcoin
 * input: (float) user's bitcoin wallet balance
 * input: (float) exchange rate for 1 btc = x bch
 * return: (float) user's new bitcoin wallet balance
 */

function buyBuyBuy(float $btcPrice, float $walletBalance, float $exchangeRate) : float {
	$actualBtcPrice = $btcPrice/$exchangeRate;
	$newBalance = $walletBalance - $actualBtcPrice;
	return($newBalance);
}

$currentExchangeRate = 6.69032212482337;
$actualRetailPrice = 2.29;
$walletBalance = 118.43;

echo buyBuyBuy($actualBtcPrice, $walletBalance, $currentExchangeRate) . PHP_EOL;