"use strict";

import Classes from "src/modules/Classes";
import Videos from "src/modules/Videos";
import Settings from "src/modules/Settings";

export default [
    {
        path: "/classes",
        component: Classes,
    },
    {
        path: "/videos",
        component: Videos,
    },
    {
        path: "/Settings",
        component: Settings,
    },
];