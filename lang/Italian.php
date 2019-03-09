<?php


return [
    //=============================================
    //=============== INDEX.PHP ===================
    //=============================================

    'title' => 'Blackjack',
    'welcome' => 'Welcome to :owner\'s blackjack!<br />This casino has $:account',
    'maxbet' => 'You can max bet $:maxbet',

    'infoCharlie' => 'A "Charlie" is when you\'ve got a certain number of cards without surpassing 21. Varies from 5 to 10 cards.',
    'canCharlie' => 'You can win with a "Charlie" with :charlieAmount cards',
    'notCharlie' => 'You <b>can\'t</b> win with a "Charlie"',

    'infoSoft17' => '"Soft 17" is when the sum is 17, but with an ace counting as 11. This makes it "soft" since the sum also can be 7.',
    'canSoft17' => 'The dealer <b>shall</b> draw on a "Soft 17"',
    'notSoft17' => 'The delaer <b>can\'t</b> draw on a "Soft 17"',

    'infoDecks' => 'The amount of card decks might affect your winning chance',
    'multipleDecks' => 'This casino uses :size deck of cards',
    'singleDeck' => 'This casino uses 1 deck of cards',

    'infoSplit' => 'If the two first cards in a hand has the same value, it is possible to split the cards into two separate hands. A separate bet is placed on the new hand. You continue playing on the original hand, and continue to the next when it is finished.',
    'multipleSplit' => 'You can split :maxsplit times',
    'singleSplit' => 'You can split ones.',

    'infoReSplit' => 'Re-splitting aces is when you\'ve already split two aces, and then receives another ace on one of those two hands.',
    'canReSplit' => 'You can re-split aces',
    'notReSplit' => 'You <b>can\'t</b> re-split aces',

    'canHitSplitAce' => 'You can hit after splitting aces',
    'notHitSplitAce' => 'You <b>can\'t</b> hit after splitting aces. Splitting aces will end the round.',

    'infoDouble' => 'In the beginning of a hand, when you have two cards, you can choose to double your bet. This will give you one more card and end the hand.',
    'anyDouble' => 'You can always double',
    'rangeDouble' => 'You can double with a sum within the range :range',
    'notDouble' => 'You <b>can\'t</b> double',

    'canSplitDouble' => 'You can double after split',
    'notSplitDouble' => 'You <b>can\'t</b> double after split',

    'ownerMessage' => 'A message from the owner',

    'controlpanel' => 'Control Panel',

    'playerMoney' => 'Saldo disponibile :playerMoney',
    'betLabel' => 'Puntata:',
    'currencyBefore' => '',
    'currencyAfter' => 'euro',
    'start' => 'Start',

    //=============================================
    //=============== BLACKJACK.PHP ===============
    //=============================================

    'outOfMoney' => 'Hai finito i soldi',
    'outOfMoneySplit' => 'Saldo insufficiente',
    'outOfMoneyDouble' => 'Saldo insufficiente',

    'dealerCards' => 'Carte del banco',
    'playerCards' => 'Le tue carte',
    'sum' => 'Somma',
    'yourCards' => 'Le tue carte',

    'c' => 'Fiori',
    's' => 'Picche',
    'h' => 'Cuori',
    'd' => 'Quadri',

    'win' => 'Hai vinto :money euro',
    'lost' => 'Hai perso',
    'push' => 'Pareggio',
    'winCharlie' => '',
    'winBlackjack' => '<b>Blackjack!</b> Hai vinto :money euro',

    'stand' => 'Stai',
    'infoStand' => 'Non chiamare',
    'hit' => 'Chiama',
    'infoHit' => 'Prendi un\'altra carta',
    'split' => 'Dividi',
    'infoSplit2' => 'Separa in due puntate differenti',
    'double' => 'Raddoppia',
    'infoDouble2' => 'Prenderai una sola carta.',

    'playAgain' => 'Rigioca',


    //=============================================
    //================== CP.PHP ===================
    //=============================================

    'settings' => 'Blackjack Settings',
    'useSoft17Label' => 'Dealer must draw on a "Soft 17"',
    'userCharlieLabel' => 'Activate "Charlie" rules',
    'charlieCardsNeededLabel' => 'Number of cards needed to get a "Charlie"',
    'messageToUsersLabel' => 'Message displayed to the player',
    'deckAmountLabel' => 'Number of decks',
    'maxbetLabel' => 'Highest bet a user can start with',
    'maxSplitsLabel' => 'Number of times the player can split',
    'hitSplitAcesLabel' => 'The player can hit after splitting aces',
    'reSplitAcesLabel' => 'The player can re-split aces (other cards can always be re-splitted)',
    'doubleLabel' => 'The player can double',
    'anyDoubleOption' => 'Always',
    'doubleOptionRange' => 'Only between :range',
    'whenToDoubleLabel' => 'When the player can double',
    'doubleAfterSplitLabel' => 'The player can double after a split',
    'save' => 'Save',
    'toGame' => 'To game'
];
