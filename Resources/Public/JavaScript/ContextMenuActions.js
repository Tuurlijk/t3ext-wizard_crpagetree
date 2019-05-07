/*
 * This file is part of the TYPO3 CMS project.
 *
 * It is free software; you can redistribute it and/or modify it under
 * the terms of the GNU General Public License, either version 2
 * of the License, or any later version.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 * The TYPO3 project - inspiring people to share!
 */
define(["require", "jquery", "TYPO3/CMS/Backend/Viewport"], function (e, r, s) {"use strict";return function () {return e.pagesNewTree = function () {var n = r(this).data("page-new-tree-url");n && s.ContentContainer.setUrl(n)}, e}()});
