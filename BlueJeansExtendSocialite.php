<?php

namespace SocialiteProviders\BlueJeans;

use SocialiteProviders\Manager\SocialiteWasCalled;

class BlueJeansExtendSocialite
{
    /**
     * Register the provider.
     *
     * @param \SocialiteProviders\Manager\SocialiteWasCalled $socialiteWasCalled
     */
    public function handle(SocialiteWasCalled $socialiteWasCalled)
    {
        $socialiteWasCalled->extendSocialite(
            'bluejeans', __NAMESPACE__.'\Provider'
        );
    }
}
