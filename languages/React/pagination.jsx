//npm react-paginate moment
import React, { useState } from "react";
import moment from "moment";
import ReactPaginate from "react-paginate";

export default function Tbl({ data, idTable }) {
    const [pageNumber, setPageNumber] = useState(0);
    const dataPerPage = 24;
    const fch = (date) => {
        return moment(date).format("yyyy-MM-DD")
    }
    // Return int greater than argument
    const pageCount = Math.ceil(data.length / dataPerPage)

    const changePage = ({ selected }) => {
        setPageNumber(selected)
    }

    return (
        data.length > 0 && (
            <>
                <div className="overflow-x-auto shadow-xl">
                    {/* <table style={{"display": "none"}} id={idTable} className="table w-full"> */}
                    <table >
                        <thead>
                            <tr className="text-center">
                                <th>Id</th>
                                <th>Name</th>
                                <th>Date</th>
                            </tr>
                        </thead>
                        <tbody>
                            {data
                                .slice(pagesVisited, pagesVisited + dataPerPage)
                                .map((item, index) => (
                                    <tr className="text-center" key={index}>
                                        <td>{item.id}</td>
                                        <td>{item.id}</td>
                                        <td>{fch(item.date)}</td>
                                    </tr>
                                )
                                )}
                        </tbody>
                    </table>
                </div>
                {/* btn pagination */}
                <div className="App">
                    <ReactPaginate
                        previousLabel={<button data-id="previous-page-button" aria-disabled="false" aria-label="Goto Previous Page"><svg fill="currentColor" width="6.46px" height="10px" viewBox="0 0 6.46 10" xmlns="http://www.w3.org/2000/svg"><path d="M0.239130435,4.47204969 L4.46273292,0.248447205 C4.75465839,-0.0434782609 5.22670807,-0.0434782609 5.51552795,0.248447205 L6.2173913,0.950310559 C6.50931677,1.24223602 6.50931677,1.71428571 6.2173913,2.00310559 L3.22670807,5 L6.22049689,7.99378882 C6.51242236,8.28571429 6.51242236,8.75776398 6.22049689,9.04658385 L5.51863354,9.7515528 C5.22670807,10.0434783 4.75465839,10.0434783 4.46583851,9.7515528 L0.242236025,5.52795031 C-0.0527950311,5.23602484 -0.0527950311,4.76397516 0.239130435,4.47204969 Z"></path></svg></button>}
                        nextLabel={<button data-id="next-page-button" aria-disabled="false" aria-label="Goto Next Page" ><svg fill="currentColor" width="6.46px" height="10px" viewBox="0 0 6.46 10" version="1.1" xmlns="http://www.w3.org/2000/svg"><path d="M6.22049689,5.52795031 L1.99689441,9.7515528 C1.70496894,10.0434783 1.23291925,10.0434783 0.944099379,9.7515528 L0.242236025,9.04968944 C-0.049689441,8.75776398 -0.049689441,8.28571429 0.242236025,7.99689441 L3.23602484,5.00310559 L0.242236025,2.00931677 C-0.049689441,1.7173913 -0.049689441,1.24534161 0.242236025,0.956521739 L0.940993789,0.248447205 C1.23291925,-0.0434782609 1.70496894,-0.0434782609 1.99378882,0.248447205 L6.2173913,4.47204969 C6.51242236,4.76397516 6.51242236,5.23602484 6.22049689,5.52795031 Z"></path></svg></button>}
                        pageCount={pageCount}
                        pageClassName={"mx-0.5 rounded-full btn btn-sm btn-ghost  bg-white-800 hover:bg-white-800"}
                        onPageChange={changePage}
                        containerClassName={"h-10	p-10 flex justify-center paginationBttns"}
                        previousLinkClassName={"ml-2 btn-ghost shadow-md border-transparent bg-white-800 hover:bg-zinc-300 rounded-full btn btn-sm previousBttn"}
                        nextLinkClassName={"mr-2 btn-ghost shadow-md border-transparent bg-white-800 hover:bg-zinc-300 rounded-full btn btn-sm nextBttn"}
                        disabledClassName={"btn-disabled paginationDisabled"}
                        activeClassName={"btn btn-sm btn-active btn-primary paginationActive"}
                    />
                </div>
            </>
        )
    )
}

