<?php

/*
 * This file is part of Sulu.
 *
 * (c) Sulu GmbH
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Sulu\Bundle\AdminBundle\Admin\View;

interface TabViewBuilderInterface extends ViewBuilderInterface
{
    /**
     * @param string[] $routerAttributesToBlacklist
     */
    public function addRouterAttributesToBlacklist(array $routerAttributesToBlacklist): self;
}
