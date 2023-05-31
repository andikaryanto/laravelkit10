import { RoundedCard } from '@/Components/Card/RoundedCard';
import { AdminLayout } from '@/Layouts/AdminLayout';
import avatar2 from '../../assets/img/avatars/avatar-2.jpeg';
import SmallCircleAvatar from '@/Components/Avatar/SmallCircleAvatar';
import SmallRoundedAvatar from '@/Components/Avatar/SmallRoundedAvatar';
import { RoundedButton } from '@/Components/Button/RoundedButton';
import { Button } from '@/Components/Button/Button';
import { Column } from '@/Components/Grid/Column';

export default function Dashboard({ auth }) {
    return <AdminLayout textName={'Dashboard'}>
        {/* <div className='container flex flex-row mb-5'>
            <RoundedCard>
                <div className='font-bold text-[18px]'>
                    Savings
                </div>
            </RoundedCard>
        </div> */}
        <div className='font-bold text-[18px] mb-2'> 
            Recent Transaction
        </div>
        <Column>
            <RoundedCard>
                <div className='flex'>
                    <SmallRoundedAvatar altText={'avatar'} imageUrl={avatar2} className='mr-2'/>
                    <div className='mr-14'>
                        <div className='text-[14px]'>
                            Andik Aryanto 
                        </div>
                        <div className='text-[12px] text-gray'>
                            March 9th. 2023
                        </div>
                    </div>
                    <div className='my-auto mr-14'>
                        $4,000
                    </div>
                    <div className='text-white my-auto bg-primary mr-14 px-2 rounded-2xl'>
                        asdasd
                    </div>
                    <div className='my-auto text-gray'>
                        <Button> . . .</Button>
                    </div>
                </div>
            </RoundedCard>
            <RoundedCard>
                <div className='flex'>
                    <SmallRoundedAvatar altText={'avatar'} imageUrl={avatar2} className='mr-2'/>
                    <div className='mr-14'>
                        <div className='text-[14px]'>
                            Andik Aryanto 
                        </div>
                        <div className='text-[12px] text-gray'>
                            March 9th. 2023
                        </div>
                    </div>
                    <div className='my-auto mr-14'>
                        $4,000
                    </div>
                    <div className='text-white my-auto bg-primary mr-14 px-2 rounded-2xl'>
                        asdasd
                    </div>
                    <div className='my-auto text-gray'>
                        <Button> . . .</Button>
                    </div>
                </div>
            </RoundedCard>
        </Column>
    </AdminLayout>;
}
