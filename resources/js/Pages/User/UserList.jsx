
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

export default function UserList() {

    const [users, setUsers] = useState([]);
    const [modalOpen, setModalOpen] = useState(false);

    const openModal = () => {
        setModalOpen(true);
    };

    const closeModal = () => {
        setModalOpen(false);
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
                return <TableRow key={i}>
                    <TableDetail>{e.id}</TableDetail>
                    <TableDetail>{e.username}</TableDetail>
                    <TableDetail>{e.email}</TableDetail>
                </TableRow>
            })}
        </Table>

        {/* <div> */}
            <button
                className="bg-blue-500 hover:bg-blue-600 text-white rounded-lg px-4 py-2"
                onClick={openModal}
            >
                Open Modal
            </button>
            <Modal isOpen={modalOpen} onClose={closeModal} />
        {/* </div> */}
    </AdminLayout>
}