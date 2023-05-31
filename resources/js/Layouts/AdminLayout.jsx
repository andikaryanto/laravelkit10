import { NavBar } from "@/Components/NavBar/NavBar";
import { SideNav } from "@/Components/SideNav/SideNav";

export const AdminLayout = () => {
  return (
    <div className="flex">
        <SideNav />
        <div className="flex flex-col w-full">
            <NavBar />
            <div className="px-4 py-6">
            </div>
        </div>
    </div>
);
}