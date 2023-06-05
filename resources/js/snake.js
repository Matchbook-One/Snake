/** @namespace humhub */
humhub.module('snake', (module, req, $) => {

  const event = req('event');
  const gamecenter = req('gamecenter').shared(module.id);

  /** @returns {void} */
  function init() {
    console.log('snake module activated')
  }

  /**
   * @param {number} score
   */
  function submitScore(score) {
    gamecenter.submitScore(score)
              .then((res) => {
                // Do something with the result
              })
              .catch((e) => {
                // Do something with the error
                module.log.error(e, undefined, true)
              })
  }

  module.export({init})
});
