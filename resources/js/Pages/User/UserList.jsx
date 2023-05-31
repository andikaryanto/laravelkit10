
import { Table } from "@/Components/Table/Table";
import { TableDetail } from "@/Components/Table/TableDetail";
import { AdminLayout } from "@/Layouts/AdminLayout";

export default function UserList({users}) {
    // users.forEach((e, i) => {
    //     console.log(e.email);
    // });
    const headers = ['id', 'username', 'email'];
    return <AdminLayout textName={'Users'}>
        <Table columns={headers}>
            {users.map((e, i) => {
                return <tr className="h-12">
                    <TableDetail>{e.id}</TableDetail>
                    <TableDetail>{e.username}</TableDetail>
                    <TableDetail>{e.email}</TableDetail>
                </tr>
            })}
        </Table>
    </AdminLayout>
}