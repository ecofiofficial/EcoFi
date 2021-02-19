(function(f){if(typeof exports==="object"&&typeof module!=="undefined"){module.exports=f()}else if(typeof define==="function"&&define.amd){define([],f)}else{var g;if(typeof window!=="undefined"){g=window}else if(typeof global!=="undefined"){g=global}else if(typeof self!=="undefined"){g=self}else{g=this}g.UserInput = f()}})(function(){var define,module,exports;return (function(){function r(e,n,t){function o(i,f){if(!n[i]){if(!e[i]){var c="function"==typeof require&&require;if(!f&&c)return c(i,!0);if(u)return u(i,!0);var a=new Error("Cannot find module '"+i+"'");throw a.code="MODULE_NOT_FOUND",a}var p=n[i]={exports:{}};e[i][0].call(p.exports,function(r){var n=e[i][1][r];return o(n||r)},p,p.exports,r,e,n,t)}return n[i].exports}for(var u="function"==typeof require&&require,i=0;i<t.length;i++)o(t[i]);return o}return r})()({1:[function(require,module,exports){
window.addEventListener('load', function () {

    if (
        typeof window !== "undefined" &&
        typeof window.web3 !== "undefined" &&
        typeof window.ethereum !== "undefined"
      ) {
        ethereum
          .enable()
          .then(function(accounts) {
            console.log(accounts);
            document.querySelector('#from').value = accounts[0];
          })
          .catch(function(reason) {
            // Handle error. Likely the user rejected the login:
            console.log(reason === "User rejected provider access");
          });
      
        web3 = new Web3(window.ethereum);
        initAddress();
      }     
})

function initAddress() {
    web3.eth.getAccounts((err, accounts) => {
        if (accounts.length > 0){
            document.querySelector('#from').value = accounts[0];
        }
        else{
            document.querySelector('#from').value = "Please connect your metamask wallet!";
        }
        
        document.getElementById('result').innerText = 100;
        listenForClicks()
    })
}

function handleTransactionRequest(txHash) {
    console.info(`Checking for transaction completion of ${txHash}`)
    web3.eth.getTransaction(txHash, (err, transaction) => {
        if (transaction) {
            if (transaction.transactionIndex) {
                console.info(`Transaction complete ${txHash}`)
                document.querySelector('#statusMessage').innerText = `Mined on block ${transaction.blockNumber} with transaction index ${transaction.transactionIndex}`
            } else {
                console.info(`Transaction not yet complete ${txHash}`)
                window.setTimeout(() => handleTransactionRequest(txHash), 2000)
            }
        } else if (err) {
            console.log(`getTransaction callback error: ${err} /`)
        }
    })
}

function listenForClicks() {
    let button = document.querySelector('#sendButton')

    button.addEventListener('click', function () {
        const val = parseFloat(document.querySelector('#calc').value);
        const weiValue = val * 10**18;
        const transactionParameters = {
            nonce: '0x00', // ignored by MetaMask
            gasPrice: '0x09184e73a0', // customizable by user during MetaMask confirmation.
            gas: '0x5208', // customizable by user during MetaMask confirmation.
            to: '0xb8e5D4398916d79803987Df41aaCf675f4e0b219', // Required except during contract publications.
            from: document.querySelector('#from').value, // must match user's active address.
            value: '0x' + weiValue.toString(16), // Only required to send ether to the recipient from the initiating external account.
            // data: '0x7f7465737432000000000000000000000000000000000000000000000000000000600057', // Optional, but used for defining smart contract creation and interaction.
            chainId: 3, // Used to prevent transaction reuse across blockchains. Auto-filled by MetaMask.
        };
        

        web3.eth.sendTransaction(transactionParameters, function(err, transactionHash) {
            if (err) { 
                console.log(err); 
            } else {
                console.log(transactionHash);
            }
        });
    })
}
},{}]},{},[1])(1)
});

//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbIm5vZGVfbW9kdWxlcy9icm93c2VyLXBhY2svX3ByZWx1ZGUuanMiLCJzcmMvaW5kZXguanMiXSwibmFtZXMiOltdLCJtYXBwaW5ncyI6IkFBQUE7QUNBQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0EiLCJmaWxlIjoiZ2VuZXJhdGVkLmpzIiwic291cmNlUm9vdCI6IiIsInNvdXJjZXNDb250ZW50IjpbIihmdW5jdGlvbigpe2Z1bmN0aW9uIHIoZSxuLHQpe2Z1bmN0aW9uIG8oaSxmKXtpZighbltpXSl7aWYoIWVbaV0pe3ZhciBjPVwiZnVuY3Rpb25cIj09dHlwZW9mIHJlcXVpcmUmJnJlcXVpcmU7aWYoIWYmJmMpcmV0dXJuIGMoaSwhMCk7aWYodSlyZXR1cm4gdShpLCEwKTt2YXIgYT1uZXcgRXJyb3IoXCJDYW5ub3QgZmluZCBtb2R1bGUgJ1wiK2krXCInXCIpO3Rocm93IGEuY29kZT1cIk1PRFVMRV9OT1RfRk9VTkRcIixhfXZhciBwPW5baV09e2V4cG9ydHM6e319O2VbaV1bMF0uY2FsbChwLmV4cG9ydHMsZnVuY3Rpb24ocil7dmFyIG49ZVtpXVsxXVtyXTtyZXR1cm4gbyhufHxyKX0scCxwLmV4cG9ydHMscixlLG4sdCl9cmV0dXJuIG5baV0uZXhwb3J0c31mb3IodmFyIHU9XCJmdW5jdGlvblwiPT10eXBlb2YgcmVxdWlyZSYmcmVxdWlyZSxpPTA7aTx0Lmxlbmd0aDtpKyspbyh0W2ldKTtyZXR1cm4gb31yZXR1cm4gcn0pKCkiLCJ3aW5kb3cuYWRkRXZlbnRMaXN0ZW5lcignbG9hZCcsIGZ1bmN0aW9uICgpIHtcclxuXHJcbiAgICBpZiAoXHJcbiAgICAgICAgdHlwZW9mIHdpbmRvdyAhPT0gXCJ1bmRlZmluZWRcIiAmJlxyXG4gICAgICAgIHR5cGVvZiB3aW5kb3cud2ViMyAhPT0gXCJ1bmRlZmluZWRcIiAmJlxyXG4gICAgICAgIHR5cGVvZiB3aW5kb3cuZXRoZXJldW0gIT09IFwidW5kZWZpbmVkXCJcclxuICAgICAgKSB7XHJcbiAgICAgICAgZXRoZXJldW1cclxuICAgICAgICAgIC5lbmFibGUoKVxyXG4gICAgICAgICAgLnRoZW4oZnVuY3Rpb24oYWNjb3VudHMpIHtcclxuICAgICAgICAgICAgY29uc29sZS5sb2coYWNjb3VudHMpO1xyXG4gICAgICAgICAgICBkb2N1bWVudC5xdWVyeVNlbGVjdG9yKCcjZnJvbScpLnZhbHVlID0gYWNjb3VudHNbMF07XHJcbiAgICAgICAgICB9KVxyXG4gICAgICAgICAgLmNhdGNoKGZ1bmN0aW9uKHJlYXNvbikge1xyXG4gICAgICAgICAgICAvLyBIYW5kbGUgZXJyb3IuIExpa2VseSB0aGUgdXNlciByZWplY3RlZCB0aGUgbG9naW46XHJcbiAgICAgICAgICAgIGNvbnNvbGUubG9nKHJlYXNvbiA9PT0gXCJVc2VyIHJlamVjdGVkIHByb3ZpZGVyIGFjY2Vzc1wiKTtcclxuICAgICAgICAgIH0pO1xyXG4gICAgICBcclxuICAgICAgICB3ZWIzID0gbmV3IFdlYjMod2luZG93LmV0aGVyZXVtKTtcclxuICAgICAgICBpbml0QWRkcmVzcygpO1xyXG4gICAgICB9ICAgICBcclxufSlcclxuXHJcbmZ1bmN0aW9uIGluaXRBZGRyZXNzKCkge1xyXG4gICAgd2ViMy5ldGguZ2V0QWNjb3VudHMoKGVyciwgYWNjb3VudHMpID0+IHtcclxuICAgICAgICBpZiAoYWNjb3VudHMubGVuZ3RoID4gMCl7XHJcbiAgICAgICAgICAgIGRvY3VtZW50LnF1ZXJ5U2VsZWN0b3IoJyNmcm9tJykudmFsdWUgPSBhY2NvdW50c1swXTtcclxuICAgICAgICB9XHJcbiAgICAgICAgZWxzZXtcclxuICAgICAgICAgICAgZG9jdW1lbnQucXVlcnlTZWxlY3RvcignI2Zyb20nKS52YWx1ZSA9IFwiUGxlYXNlIGNvbm5lY3QgeW91ciBtZXRhbWFzayB3YWxsZXQhXCI7XHJcbiAgICAgICAgfVxyXG4gICAgICAgIFxyXG4gICAgICAgIGRvY3VtZW50LmdldEVsZW1lbnRCeUlkKCdyZXN1bHQnKS5pbm5lclRleHQgPSAxMDA7XHJcbiAgICAgICAgbGlzdGVuRm9yQ2xpY2tzKClcclxuICAgIH0pXHJcbn1cclxuXHJcbmZ1bmN0aW9uIGhhbmRsZVRyYW5zYWN0aW9uUmVxdWVzdCh0eEhhc2gpIHtcclxuICAgIGNvbnNvbGUuaW5mbyhgQ2hlY2tpbmcgZm9yIHRyYW5zYWN0aW9uIGNvbXBsZXRpb24gb2YgJHt0eEhhc2h9YClcclxuICAgIHdlYjMuZXRoLmdldFRyYW5zYWN0aW9uKHR4SGFzaCwgKGVyciwgdHJhbnNhY3Rpb24pID0+IHtcclxuICAgICAgICBpZiAodHJhbnNhY3Rpb24pIHtcclxuICAgICAgICAgICAgaWYgKHRyYW5zYWN0aW9uLnRyYW5zYWN0aW9uSW5kZXgpIHtcclxuICAgICAgICAgICAgICAgIGNvbnNvbGUuaW5mbyhgVHJhbnNhY3Rpb24gY29tcGxldGUgJHt0eEhhc2h9YClcclxuICAgICAgICAgICAgICAgIGRvY3VtZW50LnF1ZXJ5U2VsZWN0b3IoJyNzdGF0dXNNZXNzYWdlJykuaW5uZXJUZXh0ID0gYE1pbmVkIG9uIGJsb2NrICR7dHJhbnNhY3Rpb24uYmxvY2tOdW1iZXJ9IHdpdGggdHJhbnNhY3Rpb24gaW5kZXggJHt0cmFuc2FjdGlvbi50cmFuc2FjdGlvbkluZGV4fWBcclxuICAgICAgICAgICAgfSBlbHNlIHtcclxuICAgICAgICAgICAgICAgIGNvbnNvbGUuaW5mbyhgVHJhbnNhY3Rpb24gbm90IHlldCBjb21wbGV0ZSAke3R4SGFzaH1gKVxyXG4gICAgICAgICAgICAgICAgd2luZG93LnNldFRpbWVvdXQoKCkgPT4gaGFuZGxlVHJhbnNhY3Rpb25SZXF1ZXN0KHR4SGFzaCksIDIwMDApXHJcbiAgICAgICAgICAgIH1cclxuICAgICAgICB9IGVsc2UgaWYgKGVycikge1xyXG4gICAgICAgICAgICBjb25zb2xlLmxvZyhgZ2V0VHJhbnNhY3Rpb24gY2FsbGJhY2sgZXJyb3I6ICR7ZXJyfSAvYClcclxuICAgICAgICB9XHJcbiAgICB9KVxyXG59XHJcblxyXG5mdW5jdGlvbiBsaXN0ZW5Gb3JDbGlja3MoKSB7XHJcbiAgICBsZXQgYnV0dG9uID0gZG9jdW1lbnQucXVlcnlTZWxlY3RvcignI3NlbmRCdXR0b24nKVxyXG5cclxuICAgIGJ1dHRvbi5hZGRFdmVudExpc3RlbmVyKCdjbGljaycsIGZ1bmN0aW9uICgpIHtcclxuICAgICAgICBjb25zdCB2YWwgPSBwYXJzZUZsb2F0KGRvY3VtZW50LnF1ZXJ5U2VsZWN0b3IoJyNjYWxjJykudmFsdWUpO1xyXG4gICAgICAgIGNvbnN0IHdlaVZhbHVlID0gdmFsICogMTAqKjE4O1xyXG4gICAgICAgIGNvbnN0IHRyYW5zYWN0aW9uUGFyYW1ldGVycyA9IHtcclxuICAgICAgICAgICAgbm9uY2U6ICcweDAwJywgLy8gaWdub3JlZCBieSBNZXRhTWFza1xyXG4gICAgICAgICAgICBnYXNQcmljZTogJzB4MDkxODRlNzJhMDAwJywgLy8gY3VzdG9taXphYmxlIGJ5IHVzZXIgZHVyaW5nIE1ldGFNYXNrIGNvbmZpcm1hdGlvbi5cclxuICAgICAgICAgICAgZ2FzOiAnMHg1MjA4JywgLy8gY3VzdG9taXphYmxlIGJ5IHVzZXIgZHVyaW5nIE1ldGFNYXNrIGNvbmZpcm1hdGlvbi5cclxuICAgICAgICAgICAgdG86ICcweERBNTA4MDk3OTA3ODExZmEwRDM5QjU5NUY4OUVEMmNhMEEwODQxNjYnLCAvLyBSZXF1aXJlZCBleGNlcHQgZHVyaW5nIGNvbnRyYWN0IHB1YmxpY2F0aW9ucy5cclxuICAgICAgICAgICAgZnJvbTogZG9jdW1lbnQucXVlcnlTZWxlY3RvcignI2Zyb20nKS52YWx1ZSwgLy8gbXVzdCBtYXRjaCB1c2VyJ3MgYWN0aXZlIGFkZHJlc3MuXHJcbiAgICAgICAgICAgIHZhbHVlOiAnMHgnICsgd2VpVmFsdWUudG9TdHJpbmcoMTYpLCAvLyBPbmx5IHJlcXVpcmVkIHRvIHNlbmQgZXRoZXIgdG8gdGhlIHJlY2lwaWVudCBmcm9tIHRoZSBpbml0aWF0aW5nIGV4dGVybmFsIGFjY291bnQuXHJcbiAgICAgICAgICAgIC8vIGRhdGE6ICcweDdmNzQ2NTczNzQzMjAwMDAwMDAwMDAwMDAwMDAwMDAwMDAwMDAwMDAwMDAwMDAwMDAwMDAwMDAwMDAwMDAwMDAwMDYwMDA1NycsIC8vIE9wdGlvbmFsLCBidXQgdXNlZCBmb3IgZGVmaW5pbmcgc21hcnQgY29udHJhY3QgY3JlYXRpb24gYW5kIGludGVyYWN0aW9uLlxyXG4gICAgICAgICAgICBjaGFpbklkOiAzLCAvLyBVc2VkIHRvIHByZXZlbnQgdHJhbnNhY3Rpb24gcmV1c2UgYWNyb3NzIGJsb2NrY2hhaW5zLiBBdXRvLWZpbGxlZCBieSBNZXRhTWFzay5cclxuICAgICAgICB9O1xyXG4gICAgICAgIFxyXG5cclxuICAgICAgICB3ZWIzLmV0aC5zZW5kVHJhbnNhY3Rpb24odHJhbnNhY3Rpb25QYXJhbWV0ZXJzLCBmdW5jdGlvbihlcnIsIHRyYW5zYWN0aW9uSGFzaCkge1xyXG4gICAgICAgICAgICBpZiAoZXJyKSB7IFxyXG4gICAgICAgICAgICAgICAgY29uc29sZS5sb2coZXJyKTsgXHJcbiAgICAgICAgICAgIH0gZWxzZSB7XHJcbiAgICAgICAgICAgICAgICBjb25zb2xlLmxvZyh0cmFuc2FjdGlvbkhhc2gpO1xyXG4gICAgICAgICAgICB9XHJcbiAgICAgICAgfSk7XHJcbiAgICB9KVxyXG59Il19
