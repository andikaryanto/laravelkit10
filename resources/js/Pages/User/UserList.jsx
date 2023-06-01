
import { Table } from "@/Components/Table/Table";
import { TableDetail } from "@/Components/Table/TableDetail";
import { TableRow } from "@/Components/Table/TableRow";
import { AdminLayout } from "@/Layouts/AdminLayout";
import { useEffect, useState } from "react";
import config from "@/Common/Config";
import axios from "axios";
import { getCookie } from "@/Common/GetCookie";
import { get } from "@/Common/Request/Request";
import { Modal } from "@/Components/Modal/Modal";
import { RoundedButton } from "@/Components/Button/RoundedButton";
import { ClearButton } from "@/Components/Button/ClearButton";
import { ModalClean } from "@/Components/Modal/ModalClean";

export default function UserList() {

    const [users, setUsers] = useState([]);
    // const [modalOpen, setModalOpen] = useState(false);

    const onOk = () => {
        alert('ok clicked')
    };

    const loadUser = () => {
        const accessToken = getCookie('access_token');
        get('/users', accessToken)
        .then(result => {
            if(result.status == 200) {
                setUsers(result.data.data._resources);
            }
        })
        .catch(err => {

        });
    }

    useEffect(() => {
        loadUser();
    }, [])

    const headers = ['id', 'username', 'email'];
    return <AdminLayout textName={'Users'}>
        <Table columns={headers}>
            {users.map((e, i) => {
                const deleteModal = <ModalClean isDialog={true} className="text-primary hover:text-dark-primary" text={'Delete'}></ModalClean>;

                return <TableRow key={i}>
                    <TableDetail>{e.id}</TableDetail>
                    <TableDetail>{e.username}</TableDetail>
                    <TableDetail>{e.email}</TableDetail>
                    <TableDetail>{deleteModal}</TableDetail>
                </TableRow>
            })}
        </Table>
        
    </AdminLayout>
}