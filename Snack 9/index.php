<?php
    require_once __DIR__ . '/classes/User.php';
    require_once __DIR__ . '/classes/PremiumUser.php';
    require_once __DIR__ . '/classes/Membership.php';

    $user= new User('Gino', 'Ginetti', 'gino.ginetti@gmail.com');
    $premiumUser = new PremiumUser('Silvia', 'Goini', 'silvia.goini@gmail.com', new membership('0849735984'));
    $SecondPremiumUser = new PremiumUser('Martina', 'Lipo', 'marti.lipo@gmail.com', new membership('39045'));

    var_dump($user, $premiumUser, $SecondPremiumUser);
    var_dump($user->getDiscount(), $premiumUser->getDiscount(), $SecondPremiumUser->getDiscount());
?>