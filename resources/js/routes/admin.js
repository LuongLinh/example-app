const admin = [
    {
        path: "/admin",
        component: () => import("../layouts/admin.vue"),
        children: [
            {
                path: "users",
                name: "admin.users",
                component: () => import("../pages/user/index.vue"),
            },
        ],
    },
];

export default admin;
