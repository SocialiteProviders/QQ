<?php

namespace SocialiteProviders\Qq;

use SocialiteProviders\Manager\SocialiteWasCalled;

class QqExtendSocialite
{
    public function handle(SocialiteWasCalled $socialiteWasCalled)
    {
        $socialiteWasCalled->extendSocialite('meetup', __NAMESPACE__.'\Provider');
    }
}
