"use strict";

import Classes from "src/modules/Classes";
import Videos from "src/modules/Videos";
import Settings from "src/modules/Settings";

export default [
    {
        path: "/classes",
        name: "Classes",
        component: Classes,
        meta: {
            name: "Classes",
            description: "Find classes conducted by your favorite coaches",
        },
    },
    {
        path: "/videos",
        name: "Videos",
        component: Videos,
        meta: {
            name: "Videos",
            description: "Watch game guides and analysis",
        },
    },
    {
        path: "/Settings",
        component: Settings,
        meta: {
            name: "Settings",
            description: "Manage your account and subscriptions",
        },
    },
];