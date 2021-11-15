import AdminPage from "./pages/AdminPage";
import BlogPage from "./pages/BlogPage";
import BlogDetailPage from "./pages/BlogDetailPage";
import HomePage from "./pages/HomePage";
import DemoComponent from "./pages/DemoComponent";
import MenuPage from "./pages/MenuPage";
import ReservationPage from "./pages/ReservationPage";
import EditAccountPage from "./pages/EditAccountPage";
import Form from "./components/Form";
import AuthenticatePage from "./pages/AuthenticatePage";
import RegisterPage from "./pages/RegisterPage";
import AboutUsPage from "./pages/AboutusPage";

const routes = [
  { path: "/", name: "homePage", component: HomePage },
  { path: "/admin", name: "adminPage", component: AdminPage },
  { path: "/about", name: "aboutUsPage", component: AboutUsPage },
  { path: "/blog/:id", name: "blogDetail", component: BlogDetailPage },
  { path: "/blog", name: "blog", component: BlogPage },
  { path: "/menu", name: "menu", component: MenuPage },
  { path: "/demo", name: "demoComponent", component: DemoComponent },
  { path: "/reservation", name: "makeReservation", component: ReservationPage },
  { path: "/auth", name: "Authenticate", component: AuthenticatePage },
  { path: "/reg", name: "Register", component: RegisterPage },
  {
    path: "/account",
    name: "editAccount",
    component: EditAccountPage,
    children: [
      {
        path: "profile",
        name: "editAccountProfile",
        component: Form,
        props: {
          type: "EditAccount",
        },
      },
      {
        path: "password",
        name: "editAccountPassword",
        component: Form,
        props: {
          type: "EditPassword",
        },
      },
    ],
  },
];

export default routes;
