
import { post } from "@/Common/Request/Request";
import { BorderedRoundedButton } from "@/Components/Button/BorderedRoundedButton";
import { Form } from "@/Components/Form/Form";
import { DropdownInput } from "@/Components/Input/DropdownInput";
import { LabeledInput } from "@/Components/Input/LabeledInput";
import { ButtonLink } from "@/Components/Link/ButtonLink";
import { AdminLayout } from "@/Layouts/AdminLayout";
import { useState } from "react";

export default function PatientAdd({villages}) {

    const [isLoading, setIsLoading ] = useState(false);
    const [form, setForm] = useState({
        name: '',
        address: '',
        phone: '',
        rt: '',
        rw: '',
        date_of_birth: '',
        gender: '',
        patient: {
            id: 0
        }

    });

    const setFormData = (key, value) => {
        setForm({
            ...form,
            [key]: value
        });
    }

    const submit = (e) => {
        e.preventDefault();
        setIsLoading(true);
        console.log(form);
        post('/patient',null, form)
        .then(result => {
            console.log(result);
            setIsLoading(false);
            if(result.status >= 200) {
                alert('Data tersimpan');
            }
        });
    };

    return <AdminLayout textName={'Add Village'}>
        <Form onSubmit={submit} className={'flex flex-col'}>
            <div>
                <LabeledInput label="Name" placeholder = "Name" type="text" name='name' onChange={(e) => setFormData('name', e.target.value)}/>
            </div>
            <div>
                <LabeledInput label="Address" placeholder = "Address" type="text" name='address' onChange={(e) => setFormData('address', e.target.value)}/>
            </div>
            <div>
                <LabeledInput label="Phone" placeholder = "Phone" type="text" name='phone' onChange={(e) => setFormData('phone', e.target.value)}/>
            </div>
            <div>
                <LabeledInput label="RT" placeholder = "RT" type="text" name='rt' onChange={(e) => setFormData('rt', e.target.value)}/>
            </div>
            <div>
                <LabeledInput label="RW" placeholder = "RW" type="text" name='rw' onChange={(e) => setFormData('rw', e.target.value)}/>
            </div>
            <div>
                <LabeledInput label="Date Of Birth" placeholder = "Date Of Birth" type="text" name='date_of_birth' onChange={(e) => setFormData('date_of_birth', e.target.value)}/>
            </div>
            <div>
                <LabeledInput label="Gender" placeholder = "Gender" type="text" name='gender' onChange={(e) => setFormData('gender', e.target.value)}/>
            </div>
            <DropdownInput items={villages} idField={'id'} textField={'name'} onSelect={(id) => setFormData('village', {id})}/>
           
            <div>
                <BorderedRoundedButton disabled={isLoading} className={'hover:bg-primary hover:text-white'}>Save</BorderedRoundedButton>
                <ButtonLink href="/patients" className={'bg-primary text-white hover:bg-dark-primary'}>Cancel</ButtonLink>
            </div>
        </Form>
    </AdminLayout>
}