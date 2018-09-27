const BASE_URL = window.b2Systems.site_url + '/' + window.b2Systems.api_prefix + '/'
const SERVER_ERROR_MESSAGE = 'We could not access the server at this time. Please try again. If the issue persists, please contact support.'
const SERVER_UNAUTH_MESSAGE = 'We could not complete the request, because you are not authorised to do so.'

export default {

  get (data) {
    if (!data.params) {
      data.params = {}
    }

    if (!data.url) {
      data.url = BASE_URL + data.path
    }

    data.params.limit = data.params.limit ? data.params.limit : 15
    data.params.ascending = data.params.ascending ? data.params.ascending : 0
    data.params.orderBy = data.params.orderBy ? data.params.orderBy : 'id'

    console.log('API Get: ' + data.url)

    return new Promise(function (resolve, reject) {
      window.axios.get(data.url, { params: data.params })
        .then(function (response) {
          resolve(response.data)
        })
        .catch(function (error) {
          reject(this.errorAdapter(error))
        }.bind(this))
    }.bind(this))
  },

  /**
   * Delete data on the server.
   *
   * @param Object data
   *
   * @return Promise | resolve() or reject()
   */
  delete (data) {
    if (!data.url) {
      data.url = BASE_URL + data.path
    }

    console.log('API Delete: ' + data.url)

    return new Promise(function (resolve, reject) {
      window.axios.delete(data.url, data.params ? { params: data.params } : '')
        .then(function (response) {
          resolve(response.data)
        })
        .catch(function (error) {
          reject(this.errorAdapter(error))
        }.bind(this))
    }.bind(this))
  },

  /**
   * Persist data to the server using the method supplied.
   *
   * @param String method
   * @param Object data
   *
   * @return Promise | resolve() or reject()
   */
  persist (method, data) {
    if (!data.params) {
      data.params = {}
    }

    if (!data.url) {
      data.url = BASE_URL + data.path
    }

    console.log('API ' + method + ': ' + data.url)

    return new Promise(function (resolve, reject) {
      window.axios[method](data.url, data.object, data.params)
        .then(function (response) {
          resolve(response.data)
        })
        .catch(function (error) {
          reject(this.errorAdapter(error))
        }.bind(this))
    }.bind(this))
  },

  /**
   * Turn the response from the server into something we can work with.
   *
   * @param Object error
   *
   * @return Object
   */
  errorAdapter (error) {
    error = error || {}
    var response = error.response ? error.response : {}
    error = response.status ? error.response : error
    var data = error.data ? error.data : error.message

    console.error('API Error:')
    console.log(error)
    console.error('API Error Data')
    console.log(data)

    return error ? (
      (typeof data === 'object' && error.status === 422)
        ? data
        : (error.status === 403)
          ? {
            message: SERVER_UNAUTH_MESSAGE,
            code: error.status
          }
          : {
            message: SERVER_ERROR_MESSAGE,
            errors: {
              'server': ['Please use this error code in any suppot queries. Error Code: ' + error.status]
            },
            code: error.status
          }
    ) : {
      message: SERVER_ERROR_MESSAGE,
      errors: {
        'server': error.message
      },
      code: error.status
    }
  }
}
